<?php

namespace Fiscaluno\Http\Controllers\API\Reviews;

use Illuminate\Http\Request;
use Fiscaluno\Http\Controllers\Controller;

use Fiscaluno\Repositories\GeneralReviewsRepository;

class GeneralReviewsController extends Controller
{
    
    /**
     * Repository Model
     */
    protected $reviews;

    /**
     * Dependency Injection
     * @param GeneralReviewsRepository $repository [description]
     */
    public function __construct(GeneralReviewsRepository $repository)
    {
        $this->reviews = $repository;
    }

    /**
     * All Detailed Reviews
     * @return Collection
     */
    public function allReviews()
    {
        return $this->reviews->all();
    }

}
