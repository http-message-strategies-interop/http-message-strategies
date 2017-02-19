<?php

namespace Interop\Http\Message\Strategies\Fixtures;

use Psr\Http\Message\ResponseInterface;

class ResponseResponse implements \Interop\Http\Message\Strategies\ResponseResponseInterface
{
    public function __invoke(ResponseInterface $respose)
    {
        return $respose;
    }
}
