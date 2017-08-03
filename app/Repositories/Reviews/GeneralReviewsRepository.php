<?php

namespace Fiscaluno\Repositories\Reviews;

class GeneralReviewsRepository extends BaseReviewsRepository
{

    /**
     * Construct General Review model
     * @param GeneralReview $reviews
     */
    public function __construct()
    {
        $reviews = new \Fiscaluno\Review\GeneralReview;
        parent::__construct($reviews);
    }

}
