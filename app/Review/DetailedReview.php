<?php

namespace Fiscaluno\Review;

class DetailedReview extends Review
{
    
    /**
     * Authorized mass assignment attributes
     * @var array
     */
    protected $fillable = [
        'course',
        'institution_id',
        'student_id',
        'type',
        'value'
    ];

    /**
     * Not authorized mass assignment attributes
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
