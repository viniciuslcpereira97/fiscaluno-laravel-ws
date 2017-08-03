<?php

namespace Fiscaluno\Http\Controllers\API\Reviews;

use Illuminate\Http\Request;
use Fiscaluno\Http\Controllers\Controller;

use Fiscaluno\Repositories\Reviews\DetailedReviewsRepository;

class DetailedReviewsController extends Controller
{

    /**
     * Dependency Injection
     * @param GeneralReviewsRepository $repository [description]
     */
    public function __construct(DetailedReviewsRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * All Detailed Reviews
     * @return Collection
     */
    public function allReviews()
    {
        return $this->repository->all();
    }

    /**
     * Detailed Review by Id
     * @param  Integer $review_id
     * @return Fiscaluno\Review\DetailedReview
     */
    public function reviewById($review_id)
    {
        return $this->repository->byId($review_id);
    }

    /**
     * Detailed Reviews by institution
     * @param  Integer $institutionId
     * @return Collection
     */
    public function reviewsByInstitution($institutionId)
    {
        return $this->repository->byInstitution($institutionId);
    }

    /**
     * Detailed Reviews by author
     * @param  Integer $author_id
     * @return Collection
     */
    public function reviewsByAuthor($author_id)
    {
        return $this->repository->byAuthor($author_id);
    }

}
