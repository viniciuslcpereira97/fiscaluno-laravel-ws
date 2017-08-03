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
     * All General Reviews
     * @return Collection
     */
    public function allReviews()
    {
        return $this->repository->all();
    }

    /**
     * General Review by Id
     * @param  [type] $review_id [description]
     * @return [type]            [description]
     */
    public function reviewById($review_id)
    {
        return $this->repository->byId($review_id);
    }

    /**
     * General Reviews by institution
     * @param  [type] $institutionId [description]
     * @return [type]                [description]
     */
    public function reviewsByInstitution($institutionId)
    {
        return $this->repository->byInstitution($institutionId);
    }

}
