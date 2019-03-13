<?php namespace Techedge\InnovaConcrete\Models;

use Syscover\Core\Models\CoreModel;

/**
 * Class Group
 * @package Techedge\InnovaConcrete\Models
 */

class Type extends CoreModel
{
	protected $table        = 'innova_concrete_type';
    protected $fillable     = ['name'];
}
