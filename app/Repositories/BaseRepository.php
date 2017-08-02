<?php
namespace Fiscaluno\Repositories;

class BaseRepository implements RepositoryInterface
{

    /**
     * Model of repository
     * @var
     */
    protected $model;

    /**
     * Class constructor
     * @param Model $model
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * Retrieves all models occurrences at database
     * @return [type]
     */
    public function all()
    {
        return $this->model->all();
    }

    /**
     * Retrieves all models occurrences at database by id
     * @param  Integer $id
     * @return [type]
     */
    public function byId($id)
    {
        return $this->model->find($id);
    }

    /**
     * Retrieves all author's models occurences at database
     * @param Model $author
     * @return [type]
     */
    public function byAuthor($author)
    {
        return $author;
    }

    /**
     * Retrieves all institution's models occurrences at database
     * @param Model $institution
     * @return [type]
     */
    public function byInstitution($institution)
    {
        return $institution;
    }

}