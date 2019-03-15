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
    public $with            = ['group'];

    public function scopeBuilder($query)
    {
        return $query
            ->join('innova_concrete_group', 'innova_concrete_people.group_id', '=', 'innova_concrete_group.id')
            ->addSelect('innova_concrete_group.*', 'innova_concrete_people.*', 'innova_concrete_group.name as innova_concrete_group_name', 'innova_concrete_people.name as innova_concrete_people_name');
    }

    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id');
    }
}
