<?php

namespace Interop\Http\Message\Strategies\Fixtures;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class ServerRequestHandler implements \Interop\Http\Message\Strategies\ServerRequestHandlerInterface
{
    public function __invoke(ServerRequestInterface $request)
    {
    }
}
