<?php

namespace Fiscaluno\Review;

use Illuminate\Database\Eloquent\Model;

use Fiscaluno\Student\Student;

class Review extends Model
{
    
    /**
     * Review owner
     * @return Fiscaluno\Student\Student
     */
    public function owner()
    {
        return $this->hasOne(Student::class);
    }

}
