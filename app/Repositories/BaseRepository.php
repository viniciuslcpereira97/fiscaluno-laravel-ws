<?php
namespace Fiscaluno\Repositories;

class BaseRepository implements RepositoryInterface
{

    /**
     * Model of repository
     * @var
     */
    protected $repository;

    /**
     * Repository Constructor
     * @param [type] $model [description]
     */
    public function __construct($model)
    {
        $this->repository = $model;
    }

    /**
     * Retrieves all models occurrences at database
     * @return [type]
     */
    public function all()
    {
        return $this->repository->all();
    }

    /**
     * Retrieves all models occurrences at database by id
     * @param  Integer $id
     * @return [type]
     */
    public function byId($id)
    {
        return $this->repository->find($id);
    }

}