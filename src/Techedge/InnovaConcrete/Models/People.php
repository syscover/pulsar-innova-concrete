<?php namespace Techedge\InnovaConcrete\Models;

use Syscover\Core\Models\CoreModel;

/**
 * Class People
 * @package Techedge\InnovaConcrete\Models
 */

class People extends CoreModel
{
	protected $table        = 'innova_concrete_people';
    protected $fillable     = ['name', 'group_id'];

    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id');
    }
}
