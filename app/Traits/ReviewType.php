<?php

namespace Fiscaluno\Traits;

trait ReviewType
{

    /**
     * Provides Review type to controller
     * @param  Array $possibilities
     * @return String
     */
    public function getReviewType($possibilities)
    {
        return $this->matchReview($possibilities);
    }

    /**
     * Get All possible review type
     * @param  Array $possibilities
     * @return String
     */
    public function getPossibilitiesString($possibilities)
    {
        $reg_possibilities = "";
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
    private function matchReview($possibilities)
    {
        $possibilities = $this->getPossibilitiesString($possibilities);
        preg_match("/.*({$possibilities}).*/", \Route::current()->uri, $match);
        return $match[1];
    }

}