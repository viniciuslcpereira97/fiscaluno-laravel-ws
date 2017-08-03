<?php

namespace Fiscaluno\Repositories\Reviews;

class DetailedReviewsRepository extends BaseReviewsRepository
{

    /**
     * Construct Detailed Review model
     * @param GeneralReview $reviews
     */
    public function __construct(\Fiscaluno\Review\DetailedReview $reviews)
    {
        $this->repository = $reviews;
    }

}
