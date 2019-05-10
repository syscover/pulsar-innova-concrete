<?php namespace Techedge\InnovaConcrete\Models;

use Syscover\Admin\Models\Attachment;
use Syscover\Core\Models\CoreModel;

/**
 * Class Characteristic
 * @package Techedge\InnovaConcrete\Models
 */

class Characteristic extends CoreModel
{
	protected $table        = 'innova_concrete_characteristic';
    protected $fillable     = ['type_id', 'name', 'description'];
    public $with            = ['type', 'attachments'];

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

    public function attachments()
    {
        return $this->morphMany(
            Attachment::class,
            'object',
            'object_type',
            'object_id',
            'id'
        )->orderBy('sort', 'asc');
    }
}
