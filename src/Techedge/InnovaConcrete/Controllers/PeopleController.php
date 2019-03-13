<?php namespace Techedge\InnovaConcrete\Controllers;

use Syscover\Core\Controllers\CoreController;
use Techedge\InnovaConcrete\Models\People;
use Techedge\InnovaConcrete\Services\PeopleService;

class PeopleController extends CoreController
{
    public function __construct(People $model, PeopleService $service)
    {
        $this->model = $model;
        $this->service = $service;
    }
}
