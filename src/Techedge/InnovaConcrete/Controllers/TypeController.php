<?php namespace Techedge\InnovaConcrete\Controllers;

use Syscover\Core\Controllers\CoreController;
use Techedge\InnovaConcrete\Models\Type;
use Techedge\InnovaConcrete\Services\TypeService;

class TypeController extends CoreController
{
    public function __construct(Type $model, TypeService $service)
    {
        $this->model = $model;
        $this->service = $service;
    }
}
