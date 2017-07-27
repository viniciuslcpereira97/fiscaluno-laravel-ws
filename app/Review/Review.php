<?php

namespace Fiscaluno\Review;

use Illuminate\Database\Eloquent\Model;

use Fiscaluno\Student\Student;
use Fiscaluno\Institution\Institution;

class Review extends Model
{
    
    /**
     * Review owner
     * @return Fiscaluno\Student\Student
     */
    public function owner()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    /**
     * Review institution
     * @return Fiscaluno\Institution\Institution
     */
    public function institution()
    {
        return $this->belongsTo(Institution::class, 'institution_id');
    }

}
