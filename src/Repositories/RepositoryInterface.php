<?php

namespace Jdubon\Laravel\Repositories;

interface RepositoryInterface
{
    /**
     * Index a Collection
     */
    public function get();

    /**
     * Shows an Item
     *
     * @param mixed $id
     */
    public function find($id);

    /**
     * Creates a new Item
     *
     * @param array $params
     */
    public function create(array $params);

    /**
     * Updates an Item
     *
     * @param array $params
     * @param mixed $id
     */
    public function update(array $params, $id);

    /**
     * Deletes an Item
     *
     * @param mixed $id
     */
    public function delete($id);
}
