<?php namespace Techedge\InnovaConcrete\GraphQL\Services;

use Syscover\Core\GraphQL\Services\CoreGraphQLService;
use Techedge\InnovaConcrete\Models\People;
use Techedge\InnovaConcrete\Services\PeopleService;

class PeopleGraphQLService extends CoreGraphQLService
{
    public function __construct(People $model, PeopleService $service)
    {
        $this->model = $model;
        $this->service = $service;
    }
}
