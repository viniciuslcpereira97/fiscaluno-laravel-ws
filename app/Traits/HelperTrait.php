<?php

namespace Fiscaluno\Traits;

trait HelperTrait
{

    /**
     * [parseClassPath description]
     * @param  [type] $path [description]
     * @return [type]       [description]
     */
    function getRelationshipString($path)
    {
        $splitted = explode('\\', $path);
        return $this->normalizeName(end($splitted));
    }

    public function normalizeName($string)
    {
        return strtolower($string) . "s";
    }

}