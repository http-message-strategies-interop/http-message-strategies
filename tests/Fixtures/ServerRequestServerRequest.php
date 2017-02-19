<?php

namespace Interop\Http\Message\Strategies\Fixtures;

use Psr\Http\Message\ServerRequestInterface;

class ServerRequestServerRequest implements \Interop\Http\Message\Strategies\ServerRequestServerRequestInterface
{
    public function __invoke(ServerRequestInterface $request)
    {
        return $request;
    }
}
