<?php

namespace Fiscaluno\Http\Controllers\API\Students;

use Illuminate\Http\Request;
use Fiscaluno\Http\Controllers\Controller;
use Fiscaluno\Repositories\Student\StudentRepository;

class StudentsController extends Controller
{
    
    /**
     * [$repository description]
     * @var [type]
     */
    protected $repository;

    /**
     * [__construct description]
     */
    public function __construct(StudentRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * [allStudents description]
     * @return [type] [description]
     */
    public function allStudents()
    {
        return $this->repository->all();
    }

    /**
     * [studentById description]
     * @param  [type] $student_id [description]
     * @return [type]             [description]
     */
    public function studentById($student_id)
    {
        return $this->repository->byId($student_id);
    }

    public function newStudent(Request $request)
    {
        return $this->repository->create($request->all());
    }

}
