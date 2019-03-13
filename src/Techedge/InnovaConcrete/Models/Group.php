<?php namespace Techedge\InnovaConcrete\Models;

use Syscover\Core\Models\CoreModel;

/**
 * Class Group
 * @package Techedge\InnovaConcrete\Models
 */

class Group extends CoreModel
{
	protected $table        = 'innova_concrete_group';
    protected $fillable     = ['name'];
}
