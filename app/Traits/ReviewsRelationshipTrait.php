<?php

namespace Fiscaluno\Traits;

trait ReviewsRelationshipTrait
{

    /**
     * Traces classpath and retrieves relationship name
     * @param String $path
     * @return String
     */
    function getRelationshipString($path)
    {
        $splitted = explode('\\', $path);
        return $this->normalizeName(end($splitted));
    }

    /**
     * Normalize review's relationship name
     * @param  String $string
     * @return String
     */
    public function normalizeName($string)
    {
        return strtolower($string) . "s";
    }

}