<?php

namespace Interop\Http\Message\Strategies\Fixtures;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class RequestHandler implements \Interop\Http\Message\Strategies\RequestHandlerInterface
{
    public function __invoke(RequestInterface $request)
    {
    }
}
