<?php

namespace Interop\Http\Message\Strategies;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Defines a contract for algorithms which accept a request argument and produce a response.
 */
interface RequestResponseInterface
{
    /**
     * Process a request and return the produced response.
     *
     * @param RequestInterface $request
     *
     * @return ResponseInterface
     */
    public function __invoke(RequestInterface $request);
}
