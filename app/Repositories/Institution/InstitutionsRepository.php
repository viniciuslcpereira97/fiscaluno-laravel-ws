<?php

namespace Fiscaluno\Repositories\Institution;

use Fiscaluno\Repositories\BaseRepository;

class InstitutionsRepository extends BaseRepository
{

    /**
     * 
     * @param \Fiscaluno\Institution\Institution $repository [description]
     */
    public function __construct(\Fiscaluno\Institution\Institution $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Institution general rate
     * @param  Integer $institution_id 
     * @return Double
     */
    public function getGeneralRate($institution_id)
    {
        return $this->byId($institution_id)->generalRate();
    }

    /**
     * Get Institution's Rates
     * @param  Integer $institution_id
     * @return Array
     */
    public function getRates($institution_id)
    {
        $institution = $this->byId($institution_id);

        return [
            "general_rate" => $institution->generalRate()
        ];
    }

    /**
     * Get Institution's ordered by General Rate
     * @param  string $direction
     * @return Collection
     */
    public function orderedByRate($direction = "asc", $limit = 5)
    {
        return $this->repository->orderBy('general_rate', $direction)->limit($limit)->get();
    }

}
