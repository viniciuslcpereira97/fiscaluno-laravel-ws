<?php

namespace Fiscaluno\Repositories\Student;

use Fiscaluno\Repositories\BaseRepository;

class StudentRepository extends BaseRepository {

    /**
     * Initialize Repository
     * @param \Fiscaluno\Student\Student $repository
     */
    public function __construct(\Fiscaluno\Student\Student $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Get students by age
     * @param  Integer $age
     * @return Collection
     */
    public function byAge($age)
    {
        return $this->repository->whereAge($age)->get();
    }

}