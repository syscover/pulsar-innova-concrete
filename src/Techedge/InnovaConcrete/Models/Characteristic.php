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

    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id');
    }
}
