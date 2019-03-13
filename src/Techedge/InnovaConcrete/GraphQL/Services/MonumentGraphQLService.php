<?php namespace Techedge\InnovaConcrete\GraphQL\Services;

use Syscover\Core\GraphQL\Services\CoreGraphQLService;
use Techedge\InnovaConcrete\Models\Monument;
use Techedge\InnovaConcrete\Services\MonumentService;

class MonumentGraphQLService extends CoreGraphQLService
{
    public function __construct(Monument $model, MonumentService$service)
    {
        $this->model = $model;
        $this->service = $service;
    }
}
