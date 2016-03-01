<?php

namespace Tonic\Component\ApiLayer\JsonRpc;

interface ServerInterface
{
    /**
     * Handles raw JSON as JSON-RPC request and returns raw JSON as JSON-RPC response.
     *
     * @param string $requestContent Raw JSON-RPC request (JSON)
     *
     * @return string Raw JSON-RPC response (JSON)
     */
    public function handle($requestContent);
}
