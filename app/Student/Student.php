<?php

namespace Fiscaluno\Student;

use Illuminate\Database\Eloquent\Model;

use Fiscaluno\Institution\Institution;

class Student extends Model
{
    
    /**
     * Authorized mass assignment attributes
     * @var array
     */
    protected $fillable = [
        'age',
        'name',
        'email',
        'gender',
        'nacionality',
        'civilStatus',
        'address',
        'city',
        'state',
        'phone',
        'institution_id'
    ];

    /**
     * Not authorized mass assignment attributes
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * Student's institution
     * @return Fiscaluno\Institution\Institution
     */
    public function institution()
    {
        return $this->belongsTo(Institution::class);
    }

}
