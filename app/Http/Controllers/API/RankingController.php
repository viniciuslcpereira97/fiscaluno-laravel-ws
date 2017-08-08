<?php

namespace Fiscaluno\Http\Controllers\API;

use Illuminate\Http\Request;
use Fiscaluno\Http\Controllers\Controller;

use Fiscaluno\Repositories\Institution\InstitutionsRepository;

class RankingController extends Controller
{

    public function getGeneralRanking(InstitutionsRepository $repository, $top_limit)
    {
        return $repository->orderedByRate($direction = "desc", $top_limit);
    }

}