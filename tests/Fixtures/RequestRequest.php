<?php

namespace Interop\Http\Message\Strategies\Fixtures;

use Psr\Http\Message\RequestInterface;

class RequestRequest implements \Interop\Http\Message\Strategies\RequestRequestInterface
{
    public function __invoke(RequestInterface $request)
    {
        return $request;
    }
}
