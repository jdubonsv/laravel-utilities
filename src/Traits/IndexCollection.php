<?php

namespace Jdubon\Laravel\Traits;

trait IndexCollection
{
    /**
     * If paginated was sent it will build the paginated collection metadata,
     * otherwise it will return a simple collection
     *
     * @param Model $model
     * @return array
     */
    protected function indexCollection($model)
    {
        $page       = request('page', false);
        $perPage    = request('per_page', 25);
        $pagination = [];
        $collection = [];

        if(is_string($model))
            $model = new $model();

        if($page)
        {
            $query      = $model->paginate($perPage);
            $collection = $query->items();
            $pagination = $this->getPagination($query);
        }
        else
        {
            $collection = $model->get();
        }

        return [
            'collection' => $collection,
            'pagination' => $pagination,
        ];
    }

    /**
     * Set pagination metadata for the response
     *
     * @param Illuminate\Database\Eloquent\Model $resource
     * @return void
     */
    protected function getPagination($resource)
    {
        return [
            'per_page'     => (int) $resource->perPage(),
            'current_page' => (int) $resource->currentPage(),
            'last_page'    => (int) $resource->lastPage(),
            'total'        => (int) $resource->total(),
        ];
    }
}