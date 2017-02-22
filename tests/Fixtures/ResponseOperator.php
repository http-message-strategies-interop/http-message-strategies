<?php

namespace Interop\Http\Message\Strategies\Fixtures;

use Psr\Http\Message\ResponseInterface;

class ResponseOperator implements \Interop\Http\Message\Strategies\ResponseOperatorInterface
{
    public function __invoke(ResponseInterface $respose)
    {
        return $respose;
    }
}
