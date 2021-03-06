<?php

namespace Fiscaluno\Review;

class GeneralReview extends Review
{
    
    /**
     * Authorized mass assignment attributes
     * @var array
     */
    protected $fillable = [
        'course',
        'institution_id',
        'student_id',
        'suggestion',
        'rate',
        'pros',
        'cons',
        'description',
        'payment',
        'startYear'
    ];

    /**
     * [$guarded description]
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * Create new review
     * @param  [type] $data [description]
     * @return [type]       [description]
     */
    public function review($data)
    {
        return $this->create($data);
    }

}
