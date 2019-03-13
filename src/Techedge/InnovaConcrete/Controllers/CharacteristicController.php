<?php namespace Techedge\InnovaConcrete\Controllers;

use Syscover\Core\Controllers\CoreController;
use Techedge\InnovaConcrete\Models\Characteristic;
use Techedge\InnovaConcrete\Services\CharacteristicService;

class CharacteristicController extends CoreController
{
    public function __construct(Characteristic $model, CharacteristicService $service)
    {
        $this->model = $model;
        $this->service = $service;
    }
}
