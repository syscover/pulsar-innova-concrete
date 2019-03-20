<?php namespace Techedge\InnovaConcrete\Models;

use Syscover\Core\Models\CoreModel;
use Syscover\Admin\Models\Country;

/**
 * Class Monument
 * @package Techedge\InnovaConcrete\Models
 */

class Monument extends CoreModel
{
	protected $table        = 'innova_concrete_monument';
    protected $fillable     = ['id', 'original_name', 'current_name', 'slug', 'other_denominations', 'original_use', 'current_use', 'commission', 'completion', 'description', 'rapporteur_name', 'rapporteur_email', 'rapporteur_date', 'percentage_progress', 'links', 'country_id', 'province', 'address', 'locality', 'zip', 'latitude', 'longitude'];
    public $with            = ['peoples', 'characteristics', 'countries'];

    public function scopeBuilder($query)
    {
        return $query
            ->join('admin_country', function($join) {
                $join
                    ->on('innova_concrete_monument.country_id', '=', 'admin_country.id')
                    ->where('admin_country.lang_id', '=', base_lang());
            })
            ->addSelect(
                'admin_country.*',
                'innova_concrete_monument.*'
            );
    }

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

    public function countries()
    {
        return $this->hasMany(Country::class, 'id', 'country_id');
    }
}
