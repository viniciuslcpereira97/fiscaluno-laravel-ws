<?php

namespace Fiscaluno\Http\Controllers\API\Reviews;

use Illuminate\Http\Request;
use Fiscaluno\Http\Controllers\Controller;

use Fiscaluno\Traits\ReviewType;
use Fiscaluno\Repositories\Reviews\GeneralReviewsRepository;
use Fiscaluno\Repositories\Reviews\DetailedReviewsRepository;

class ReviewsController extends Controller
{

    use ReviewType;

    /**
     * Future repository object
     * @var Undefined
     */
    protected $repository;

    /**
     * Reviews possibilities
     * @var Array
     */
    protected $possibilities = [
        "detailed"  =>  DetailedReviewsRepository::class,
        "general"   =>  GeneralReviewsRepository::class
    ];

    /**
     * Dependency Injection
     * @param GeneralReviewsRepository $repository [description]
     */
    public function __construct()
    {
        $review = $this->getReviewType($this->possibilities);
        $this->repository = new $this->possibilities[$review];
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

}
