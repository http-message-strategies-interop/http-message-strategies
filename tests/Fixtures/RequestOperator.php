<?php

namespace Interop\Http\Message\Strategies\Fixtures;

use Psr\Http\Message\RequestInterface;

class RequestOperator implements \Interop\Http\Message\Strategies\RequestOperatorInterface
{
    public function __invoke(RequestInterface $request)
    {
        return $request;
    }
}
