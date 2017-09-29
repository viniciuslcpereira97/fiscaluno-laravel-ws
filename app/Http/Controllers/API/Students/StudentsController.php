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
     * Retrieves all students
     * @return Student
     */
    public function allStudents()
    {
        return $this->repository->all();
    }

    /**
     * Retrieves student by id
     * @param  Integer $student_id
     * @return Student
     */
    public function studentById($student_id)
    {
        return $this->repository->byId($student_id);
    }

    /**
     * Creates new student
     * @param  Request $request
     * @return Json
     */
    public function newStudent(Request $request)
    {
        return $this->repository->create($request->all());
    }

}
