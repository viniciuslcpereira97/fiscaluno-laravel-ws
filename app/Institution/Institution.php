<?php

namespace Fiscaluno\Institution;

use Illuminate\Database\Eloquent\Model;

use Fiscaluno\Student\Student;

class Institution extends Model
{
    
    /**
     * Authorized atributtes to mass assignment
     * @var array
     */
    protected $fillable = [
        'name',
        'address',
        'cnpj',
        'email',
        'website',
        'phoneNumber',
        'imageUri',
    ];

    /**
     * Not Authorized atributtes to mass assignment
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * All students at institution
     * @return Colletion
     */
    public function students()
    {
        return $this->hasMany(Student::class);
    }

}
