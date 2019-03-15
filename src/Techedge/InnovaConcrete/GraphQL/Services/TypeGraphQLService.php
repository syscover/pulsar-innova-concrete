<?php namespace Techedge\InnovaConcrete\GraphQL\Services;

use Syscover\Core\GraphQL\Services\CoreGraphQLService;
use Techedge\InnovaConcrete\Models\Type;
use Techedge\InnovaConcrete\Services\TypeService;

class TypeGraphQLService extends CoreGraphQLService
{
    public function __construct(Type $model, TypeService $service)
    {
        $this->model = $model;
        $this->service = $service;
    }
}
