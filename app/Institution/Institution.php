<?php

namespace Fiscaluno\Institution;

use Illuminate\Database\Eloquent\Model;

use Fiscaluno\Student\Student;
use Fiscaluno\Review\GeneralReview;
use Fiscaluno\Review\DetailedReview;

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
        'imageUri'
    ];

    /**
     * Not authorized atributtes to mass assignment
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * All students at institution
     * @return Collection
     */
    public function students()
    {
        return $this->hasMany(Student::class);
    }

    /**
     * All general reviews
     * @return Collection
     */
    public function generalreviews()
    {
        return $this->hasMany(GeneralReview::class);
    }

    /**
     * All detailed reviews
     * @return Collection
     */
    public function detailedreviews()
    {
        return $this->hasMany(DetailedReview::class);
    }

}
