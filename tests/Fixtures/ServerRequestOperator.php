<?php

namespace Interop\Http\Message\Strategies\Fixtures;

use Psr\Http\Message\ServerRequestInterface;

class ServerRequestOperator implements \Interop\Http\Message\Strategies\ServerRequestOperatorInterface
{
    public function __invoke(ServerRequestInterface $request)
    {
        return $request;
    }
}
