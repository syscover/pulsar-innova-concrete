<?php namespace Techedge\InnovaConcrete\Controllers;

use Syscover\Core\Controllers\CoreController;
use Techedge\InnovaConcrete\Models\Monument;
use Techedge\InnovaConcrete\Services\MonumentService;

class MonumentController extends CoreController
{
    public function __construct(Monument $model, MonumentService $service)
    {
        $this->model = $model;
        $this->service = $service;
    }
}
