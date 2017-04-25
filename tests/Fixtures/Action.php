<?php

namespace Interop\Http\Message\Strategies\Fixtures;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class Action implements \Interop\Http\Message\Strategies\ActionInterface
{
    public function __invoke(RequestInterface $request)
    {
    }
}
