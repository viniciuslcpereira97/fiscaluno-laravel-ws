<?php

namespace Fiscaluno\Traits;

use Fiscaluno\Repositories\Reviews\GeneralReviewsRepository;
use Fiscaluno\Repositories\Reviews\DetailedReviewsRepository;

trait ReviewType
{

    /**
     * Reviews possibilities
     * @var Array
     */
    protected $possibilities = [
        "detailed"  =>  DetailedReviewsRepository::class,
        "general"   =>  GeneralReviewsRepository::class
    ];

    /**
     * Provides Review type to controller
     * @param  Array $possibilities
     * @return String
     */
    public function getReviewType()
    {
        return $this->matchReview();
    }

    /**
     * Get All possible review type
     * @param  Array $possibilities
     * @return String
     */
    public function getPossibilitiesString()
    {
        $reg_possibilities = "";
        $possibilities = $this->possibilities;
        foreach($possibilities as $possibility => $class)
        {
            $reg_possibilities .= "{$possibility}|";
        }
        return $this->formatFinalString($reg_possibilities);
    }

    /**
     * Normalize string before send to controller
     * @param  String $string
     * @return String
     */
    private function formatFinalString($string)
    {
        return trim(substr($string, 0, -1));
    }

    /**
     * URI Regex to match review type
     * @param  Array $possibilities
     * @return String
     */
    private function matchReview()
    {
        $possibilities = $this->getPossibilitiesString();
        preg_match("/.*({$possibilities}).*/", \Route::current()->uri, $match);
        return $match[1];
    }

}