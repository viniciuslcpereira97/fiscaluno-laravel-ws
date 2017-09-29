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
     * [FunctionName description]
     * @param string $value [description]
     */
    public function create($student_data)
    {
        return $this->repository->create($student_data);
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