<?php

namespace Interop\Http\Message\Strategies\Fixtures;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class ServerRequestResponse implements \Interop\Http\Message\Strategies\ServerRequestResponseInterface
{
    public function __invoke(ServerRequestInterface $request)
    {
    }
}
