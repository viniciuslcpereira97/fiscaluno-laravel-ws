<?php

namespace Fiscaluno\Repositories\Reviews;

use Fiscaluno\Student\Student;
use Fiscaluno\Institution\Institution;
use Fiscaluno\Repositories\BaseRepository;
use \Fiscaluno\Traits\ReviewsRelationshipTrait;

abstract class BaseReviewsRepository extends BaseRepository 
{

    use ReviewsRelationshipTrait;

    /**
     * Retrieves all author's models occurences at database
     * @param Model $author
     * @return Collection
     */
    public function byAuthor($author)
    {
        $model = $this->getRelationshipString(get_class($this->repository));
        return Student::find($author)->$model;
    }

    /**
     * Retrieves all institution's models occurrences at database
     * @param Model $institution
     * @return Collection
     */
    public function byInstitution($institution)
    {
        $model = $this->getRelationshipString(get_class($this->repository));
        return Institution::find($institution)->$model;
    }

} 