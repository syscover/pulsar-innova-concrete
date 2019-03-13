<?php namespace Techedge\InnovaConcrete\GraphQL\Services;

use Syscover\Admin\Services\UserService;
use Syscover\Core\GraphQL\Services\CoreGraphQLService;
use Techedge\InnovaConcrete\Models\Type;

class TypeGraphQLService extends CoreGraphQLService
{
    public function __construct(Type $model, UserService $service)
    {
        $this->model = $model;
        $this->service = $service;
    }
}
