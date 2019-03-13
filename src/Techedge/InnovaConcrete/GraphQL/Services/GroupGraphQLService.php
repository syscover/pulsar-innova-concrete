<?php namespace Techedge\InnovaConcrete\GraphQL\Services;

use Syscover\Core\GraphQL\Services\CoreGraphQLService;
use Techedge\InnovaConcrete\Models\Group;
use Techedge\InnovaConcrete\Services\GroupService;

class GroupGraphQLService extends CoreGraphQLService
{
    public function __construct(Group $model, GroupService $service)
    {
        $this->model = $model;
        $this->service = $service;
    }
}
