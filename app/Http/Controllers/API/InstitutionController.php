<?php

namespace Fiscaluno\Http\Controllers\API;

use Illuminate\Http\Request;
use Fiscaluno\Http\Controllers\Controller;

use Fiscaluno\Repositories\Institution\InstitutionsRepository;

class InstitutionController extends Controller
{

    /**
     * Future repository object
     */
    protected $repository;

    /**
     * Build repository instance
     * @param InstitutionRepository $repository
     */
    public function __construct(InstitutionsRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * All institutions
     * @return Collection
     */
    public function all()
    {
        return $this->repository->all();
    }

    /**
     * Get Institution by id
     * @param  Integer $institution_id
     * @return Fiscaluno\Institution\Institution
     */
    public function byId($institution_id)
    {
        return $this->repository->byId($institution_id);
    }

    /**
     * Get Institution General Rate by Institution id 
     * @param  Integer $institution_id
     * @return Double
     */
    public function getGeneralRate($institution_id)
    {
        return $this->repository->getGeneralRate($institution_id);
    }

    /**
     * Get all Institution's Rates
     * @param  Integer $institution_id
     * @return Array
     */
    public function getRates($institution_id)
    {
        return $this->repository->getRates($institution_id);
    }

}
