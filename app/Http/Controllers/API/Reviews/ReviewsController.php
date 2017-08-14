<?php

namespace Fiscaluno\Http\Controllers\API\Reviews;

use Illuminate\Http\Request;
use Fiscaluno\Http\Controllers\Controller;

use Fiscaluno\Traits\ReviewType;
use Fiscaluno\Http\Requests\ReviewRequest;

class ReviewsController extends Controller
{

    use ReviewType;

    /**
     * Future repository object
     * @var Undefined
     */
    protected $repository;

    /**
     * Dependency Injection
     * @param GeneralReviewsRepository $repository [description]
     */
    public function __construct()
    {
        $this->repository = new $this->possibilities[$this->getReviewType()];
    }

    /**
     * All General Reviews
     * @return Collection
     */
    public function allReviews()
    {
        return $this->repository->all();
    }

    /**
     * General Review by Id
     * @param  Integer $review_id
     * @return Fiscaluno\Review\GeneralReview
     */
    public function reviewById($review_id)
    {
        return $this->repository->byId($review_id);
    }

    /**
     * General Reviews by institution
     * @param  Integer $institutionId
     * @return Collection
     */
    public function reviewsByInstitution($institutionId)
    {
        return $this->repository->byInstitution($institutionId);
    }

    /**
     * General Reviews by author
     * @param  Integer $author_id
     * @return Collection
     */
    public function reviewsByAuthor($author_id)
    {
        return $this->repository->byAuthor($author_id);
    }

    /**
     * [newReview description]
     * @param  ReviewRequest $request [description]
     * @return [type]           [description]
     */
    public function newReview(ReviewRequest $request)
    {
        return $this->repository->create($request);
    }

}
