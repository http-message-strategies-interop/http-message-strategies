#!/usr/bin/env php
<?php

namespace Interop\Http\Message\Strategies;

require_once __DIR__.'/../vendor/autoload.php';

new Fixtures\RequestRequest();
new Fixtures\RequestResponse();
new Fixtures\ResponseResponse();
new Fixtures\ServerRequestResponse();
new Fixtures\ServerRequestServerRequest();
