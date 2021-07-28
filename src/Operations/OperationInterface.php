<?php

namespace Jdubon\Laravel\Operations;

interface OperationInterface
{
    /**
     * Main entry point of an Operation
     *
     * @param mixed ...$pathParams
     * @return \Illuminate\Http\JsonResponse
     */
    public function perform(...$pathParams);
}