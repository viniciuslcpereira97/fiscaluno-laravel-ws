<?php

namespace Fiscaluno\Repositories\Reviews;

use Fiscaluno\Student\Student;
use Fiscaluno\Institution\Institution;
use Fiscaluno\Repositories\BaseRepository;

abstract class BaseReviewsRepository extends BaseRepository 
{

    /**
     * Retrieves all author's models occurences at database
     * @param Model $author
     * @return [type]
     */
    public function byAuthor($author)
    {
        return $author;
    }

    /**
     * Retrieves all institution's models occurrences at database
     * @param Model $institution
     * @return [type]
     */
    public function byInstitution($institution)
    {
        return $institution;
    }

} 