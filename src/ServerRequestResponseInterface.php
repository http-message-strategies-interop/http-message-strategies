<?php

namespace Interop\Http\Message\Strategies;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

/**
 * Defines a contract for algorithms which accept a server request argument and produce a respose.
 */
interface ServerRequestResponseInterface
{
    /**
     * Process a server request and return the produced response.
     *
     * @param ServerRequestInterface $request
     *
     * @return ResponseInterface
     */
    public function __invoke(ServerRequestInterface $request);
}
