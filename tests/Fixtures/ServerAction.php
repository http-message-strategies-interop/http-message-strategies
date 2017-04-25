<?php

namespace Interop\Http\Message\Strategies\Fixtures;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class ServerAction implements \Interop\Http\Message\Strategies\ServerActionInterface
{
    public function __invoke(ServerRequestInterface $request)
    {
    }
}
