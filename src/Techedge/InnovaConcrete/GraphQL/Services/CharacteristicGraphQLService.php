<?php namespace Techedge\InnovaConcrete\GraphQL\Services;

use Syscover\Core\GraphQL\Services\CoreGraphQLService;
use Techedge\InnovaConcrete\Models\Characteristic;
use Techedge\InnovaConcrete\Services\CharacteristicService;

class CharacteristicGraphQLService extends CoreGraphQLService
{
    public function __construct(Characteristic $model, CharacteristicService $service)
    {
        $this->model = $model;
        $this->service = $service;
    }
}
