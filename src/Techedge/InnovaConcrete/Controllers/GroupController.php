<?php namespace Techedge\InnovaConcrete\Controllers;

use Syscover\Core\Controllers\CoreController;
use Techedge\InnovaConcrete\Models\Group;
use Techedge\InnovaConcrete\Services\GroupService;

class GroupController extends CoreController
{
    public function __construct(Group $model, GroupService $service)
    {
        $this->model = $model;
        $this->service = $service;
    }
}
