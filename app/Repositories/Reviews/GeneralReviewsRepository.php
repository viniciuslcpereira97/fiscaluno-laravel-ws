<?php

namespace Fiscaluno\Repositories\Reviews;

class GeneralReviewsRepository extends BaseReviewsRepository
{

    /**
     * Construct General Review model
     * @param GeneralReview $reviews
     */
    public function __construct(\Fiscaluno\Review\GeneralReview $reviews)
    {
        parent::__construct($reviews);
    }

}
