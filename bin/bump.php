#!/usr/bin/env php
<?php

/*
 * Parse $argv
 */
if (count($argv) !== 2 &&
    $argv[0] !== 'latest' &&
    !preg_match('/^\d+.\d+.\d+$/', $argv[0])
) {
    echo <<<EOU
usage:
    $argv[0] <version>

version:
    latest                                bump to latest version
    {MAJOR:\d+}.{MINOR:\d+}.{PATCH:\d+}   bump to an explict version

examples:
    $argv[0] latest
    $argv[0] 0.4.1

EOU;
    exit(1);
}

$semversion = $argv[1];

/*
 * Parse $semversion
 */
$response = json_decode(file_get_contents(
    'https://api.github.com/repos/http-message-strategies-interop/fig-standards/tags',
    false,
    stream_context_create([
        'http' => [
                'method' => 'GET',
                'header' => [
                        'User-Agent: http-message-strategies-interop',
                ],
        ],
    ])
));

if ($semversion === 'latest') {
    $tags = [];
    $versions = [];

    foreach ($response as $tagInfo) {
        if (preg_match(
            '/http-message-strategies-(?P<version>\d+.\d+.\d+)/',
            $tagInfo->name,
            $m
        )) {
            $version = $m['version'];
            $tags[$version] = $tagInfo;
            $versions[] = $version;
        }
    }

    rsort($versions);

    $semversion = $versions[0];
    $tagUrl = $tags[$semversion]->commit->url;
} else {
    foreach ($response as $tagInfo) {
        if ($tagInfo->name === 'http-message-strategies-'.$semversion) {
            $tagUrl = $tagInfo->commit->url;
        }
    }
}

/*
 * Parse $tagUrl
 */
$response = json_decode(file_get_contents(
    $tagUrl,
    false,
    stream_context_create([
        'http' => [
                'method' => 'GET',
                'header' => [
                        'User-Agent: http-message-strategies-interop',
                ],
        ],
    ])
));
$commitMessage = trim(preg_replace('/\[hms\]/i', '', $response->commit->message));

/*
 * Update composer.json
 */
$composerJsonPath = __DIR__.'/../composer.json';
$composerJson = json_decode(file_get_contents($composerJsonPath));

foreach ($composerJson->repositories as $repo) {
    $package = $repo->package;
    if ($package->name === 'php-fig/fig-standards') {
        $package->version = $semversion;
        $package->source->reference = 'http-message-strategies-'.$semversion;
    }
}

file_put_contents(
    $composerJsonPath,
    json_encode($composerJson, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES).PHP_EOL
);

echo <<<EOT
---------------------------------------------------------------------------

Sucessfully bumped to $semversion.

Next steps:
    rm -rf composer.lock vendor/
    composer install
    composer run build
    composer test
    git add .
    git commit -m "$semversion $commitMessage"
    git tag "$semversion"
    git push
    git push --tags

---------------------------------------------------------------------------

EOT;
