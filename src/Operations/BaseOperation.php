<?php

namespace Jdubon\Laravel\Operations;

use Illuminate\Http\Request;
use Jdubon\Laravel\Repositories\RepositoryInterface;

abstract class BaseOperation
{
    /**
     * Contains all the params from the request for easy access
     *
     * @var array
     */
    protected $params;

    /**
     * Operation Repository
     *
     * @var RepositoryInterface
     */
    protected $repository;

    /**
     * Setting up the operation
     *
     * @param RepositoryInterface $repository
     */
    public function __construct(Request $request, RepositoryInterface $repository)
    {
        $this->repository = $repository;
        $this->params = $request->all();
    }
}
