<?php

namespace Fiscaluno\Repositories;

use Fiscaluno\Review\DetailedReview;

class DetailedReviewsRepository extends BaseRepository
{

    /**
     * Construct Detailed Review model
     * @param GeneralReview $reviews
     */
    public function __construct(DetailedReview $reviews)
    {
        $this->model = $reviews;
    }

}
