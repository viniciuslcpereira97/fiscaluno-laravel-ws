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

    /**
     * All author's models
     * @param  [type] $author [description]
     * @return [type]         [description]
     */
    function byAuthor($author);
        
    /**
     * All institution's models
     * @param  [type] $institution [description]
     * @return [type]              [description]
     */
    function byInstitution($institution);
}