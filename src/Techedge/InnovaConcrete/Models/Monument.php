<?php namespace Techedge\InnovaConcrete\Models;

use Laravel\Scout\Searchable;
use Syscover\Core\Models\CoreModel;
use Syscover\Admin\Models\Attachment;
use Syscover\Admin\Models\Country;

/**
 * Class Monument
 * @package Techedge\InnovaConcrete\Models
 */

class Monument extends CoreModel
{
    use Searchable;

	protected $table        = 'innova_concrete_monument';
    protected $fillable     = ['id', 'original_name', 'current_name', 'slug', 'other_denominations', 'original_use', 'current_use', 'commission', 'completion', 'description', 'rapporteur_name', 'rapporteur_email', 'rapporteur_date', 'percentage_progress', 'links', 'country_id', 'province', 'address', 'locality', 'zip', 'latitude', 'longitude'];
    protected $casts        = [
        'links' => 'array'
    ];
    public $with            = ['peoples', 'characteristics', 'countries', 'attachments'];

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

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray()
    {
        $searchable = [
            'id'                    => $this->id,
            'original_name'         => $this->original_name,
            'current_name'          => $this->current_name,
            'slug'                  => $this->slug,
            'other_denominations'   => $this->other_denominations,
            'original_use'          => $this->original_use,
            'current_use'           => $this->current_use,
            'description'           => $this->description,
            'rapporteur_name'       => $this->rapporteur_name,
            'countries'             => $this->countries->map(function ($item, $key) {
                return $item->only(['ix' ,'id', 'lang_id', 'name', 'slug', 'sort', 'prefix', 'territorial_area_1', 'territorial_area_2', 'territorial_area_3', 'zones', 'latitude', 'longitude', 'zoom']);
            }),
            'province'              => $this->province,
            'address'               => $this->address,
            'locality'              => $this->locality,
            'latitude'              => $this->latitude,
            'longitude'             => $this->longitude,
            'peoples'               => $this->peoples->toArray(),
            'characteristics'       => $this->characteristics->toArray(),
            'attachments'           => $this->attachments->toArray()
        ];

        return $searchable;
    }
}
