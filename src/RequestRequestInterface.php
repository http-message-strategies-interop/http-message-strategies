<?php

namespace Interop\Http\Message\Strategies;

use Psr\Http\Message\RequestInterface;

/**
 * Defines a contract for algorithms which accept a request argument and produce a request.
 */
interface RequestRequestInterface
{
    /**
     * Process a request and return the produced request.
     *
     * @param RequestInterface $request
     *
     * @return RequestInterface
     */
    public function __invoke(RequestInterface $request);
}
