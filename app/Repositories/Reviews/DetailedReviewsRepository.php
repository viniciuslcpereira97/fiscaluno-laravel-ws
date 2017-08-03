<?php

namespace Fiscaluno\Repositories\Reviews;

class DetailedReviewsRepository extends BaseReviewsRepository
{

    /**
     * Construct Detailed Review model
     * @param GeneralReview $reviews
     */
    public function __construct()
    {
        $reviews = new \Fiscaluno\Review\DetailedReview;
        parent::__construct($reviews);
    }

}
