<?php

namespace Fiscaluno\Repositories;

use Fiscaluno\Review\GeneralReview;

class GeneralReviewsRepository extends BaseRepository
{

    /**
     * Construct General Review model
     * @param GeneralReview $reviews
     */
    public function __construct(GeneralReview $reviews)
    {
        $this->model = $reviews;
    }

}
