<?php namespace App\Repositories;

/**
 * Class BaseRepository
 *
 * @package App\Repositories
 */
class BaseRepository
{
    protected $model;

    /**
     * Get All
     * 
     * @return mixed
     */
    public function all()
    {
        return $this->model->all();
    }

    /**
     * Find model by ID
     * 
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return $this->model->find($id);
    }

    /**
     * Find model where
     * 
     * @param array $params
     * @return mixed
     */
    public function findWhere($params = [])
    {
        return $this->model->where($params)->get();
    }

    /**
     * Destroy
     * 
     * @param $id
     * @return mixed
     */
    public function destroy($id)
    {
        return $this->model->destroy($id);
    }
}