<?php

namespace Interop\Http\Message\Strategies;

use Psr\Http\Message\ResponseInterface;

/**
 * Defines a contract for algorithms which accept a respose argument and produce a respose.
 */
interface ResponseResponseInterface
{
    /**
     * Process a respose and return the produced respose.
     *
     * @param ResponseInterface $respose
     *
     * @return ResponseInterface
     */
    public function __invoke(ResponseInterface $respose);
}
