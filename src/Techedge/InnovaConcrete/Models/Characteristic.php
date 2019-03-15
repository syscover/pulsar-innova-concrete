<?php namespace Techedge\InnovaConcrete\Models;

use Syscover\Core\Models\CoreModel;

/**
 * Class Characteristic
 * @package Techedge\InnovaConcrete\Models
 */

class Characteristic extends CoreModel
{
	protected $table        = 'innova_concrete_characteristic';
    protected $fillable     = ['name', 'type_id'];
    public $with            = ['type'];

    public function scopeBuilder($query)
    {
        return $query
            ->join('innova_concrete_type', 'innova_concrete_characteristic.type_id', '=', 'innova_concrete_type.id')
            ->addSelect('innova_concrete_type.*', 'innova_concrete_characteristic.*', 'innova_concrete_type.name as innova_concrete_type_name', 'innova_concrete_characteristic.name as innova_concrete_characteristic_name');
    }

    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id');
    }
}
