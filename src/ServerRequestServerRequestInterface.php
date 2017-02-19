<?php

namespace Interop\Http\Message\Strategies;

use Psr\Http\Message\ServerRequestInterface;

/**
 * Defines a contract for algorithms which accept a server request argument and produce a server request.
 */
interface ServerRequestServerRequestInterface
{
    /**
     * Process a request and return the produced server request.
     *
     * @param ServerRequestInterface $request
     *
     * @return ServerRequestInterface
     */
    public function __invoke(ServerRequestInterface $request);
}
