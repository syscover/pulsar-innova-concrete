<?php namespace Techedge\InnovaConcrete\Models;

use Syscover\Core\Models\CoreModel;

/**
 * Class Monument
 * @package Techedge\InnovaConcrete\Models
 */

class Monument extends CoreModel
{
	protected $table        = 'innova_concrete_monument';
    protected $fillable     = ['id', 'original_name', 'current_name', 'slug', 'other_denominations', 'original_use', 'current_use', 'commission', 'completion', 'description', 'rapporteur_name', 'rapporteur_email', 'rapporteur_date', 'percentage_progress', 'links', 'country_id', 'province', 'address', 'locality', 'zip', 'latitude', 'longitude'];
    public $with            = ['peoples', 'characteristics'];

    public function peoples()
    {
        return $this->belongsToMany(
            People::class,
            'innova_concrete_monuments_peoples',
            'monument_id',
            'people_id',
            'id',
            'id'
        );
    }

    public function characteristics()
    {
        return $this->belongsToMany(
            Characteristic::class,
            'innova_concrete_monuments_characteristics',
            'monument_id',
            'characteristic_id',
            'id',
            'id'
        );
    }
}
