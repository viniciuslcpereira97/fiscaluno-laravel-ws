<?php

namespace Fiscaluno\Repositories;

interface RepositoryInterface {
    /**
     * All models
     * @return [type] [description]
     */
    function all();
    
    /**
     * All models by id
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    function byId($id);
}