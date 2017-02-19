<?php

namespace Interop\Http\Message\Strategies\Fixtures;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class RequestResponse implements \Interop\Http\Message\Strategies\RequestResponseInterface
{
    public function __invoke(RequestInterface $request)
    {
    }
}
