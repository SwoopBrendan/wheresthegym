<?php namespace App\Services;

use App\Repositories\BaseRepository;
use Exception;

/**
 * Class BaseService
 *
 * @package App\Services
 */
class BaseService
{
    /** @var  BaseRepository */
    public $repository;

    /**
     * Delete a single column form a repository
     *
     * @param $id
     * @param null BaseRepository|null $repository
     * @throws Exception
     */
    public function delete($id, BaseRepository $repository = null)
    {
        try {

            ($repository)
                ? $repository->deleteEntity($id)
                : $this->repository->deleteEntity($id);

        } catch (Exception $e) {

            throw new Exception($e->getMessage());

        }
    }

    /**
     * @param $id
     * @param BaseRepository|null $repository
     * @return null|object
     */
    public function find($id, BaseRepository $repository = null)
    {
        return ($repository) ? $repository->find($id) : $this->repository->find($id);
    }

    /**
     * @param array $criteria
     * @param BaseRepository|null $repository
     * @param array $orderBy
     * @param null $limit
     * @param null $offset
     * @return array
     */
    public function findBy(
        $criteria = [],
        BaseRepository $repository = null,
        array $orderBy = null,
        $limit = null,
        $offset = null
    ) {
        return ($repository)
            ? $repository->findBy($criteria, $orderBy, $limit, $offset)
            : $this->repository->findBy($criteria, $orderBy, $limit, $offset);
    }

    /**
     * @param array $criteria
     * @param BaseRepository|null $repository
     * @return null|object
     */
    public function findOneBy($criteria = [], BaseRepository $repository = null)
    {
        return ($repository)
            ? $repository->findOneBy($criteria)
            : $this->repository->findOneBy($criteria);
    }

    /**
     * @param BaseRepository|null $repository
     * @return array
     */
    public function findAll(BaseRepository $repository = null)
    {
        return ($repository)
            ? $repository->findAll()
            : $this->repository->findAll();
    }
}