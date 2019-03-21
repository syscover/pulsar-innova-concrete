<?php namespace Techedge\InnovaConcrete\Services;

use Syscover\Core\Exceptions\ModelNotChangeException;
use Syscover\Core\Services\Service;
use Techedge\InnovaConcrete\Models\Monument;

class MonumentService extends Service
{
    public function store(array $data)
    {
        $this->validate($data, [
            'original_name'         => 'nullable|between:2,255',
            'current_name'          => 'required|between:2,255',
            'slug'                  => 'required|between:2,255',
            'other_denominations'   => 'nullable|between:2,255',
            'original_use'          => 'nullable|between:2,255',
            'current_use'           => 'nullable|between:2,255',
            'commission'            => 'nullable|integer|digits:4',
            'completion'            => 'nullable|integer|digits:4',
            'rapporteur_name'       => 'nullable|between:2,255',
            'rapporteur_email'      => 'nullable|between:2,255',
            'rapporteur_date'       => 'nullable|integer',
            'percentage_progress'   => 'nullable|integer',
            'links'                 => 'nullable|array',
            'country_id'            => 'nullable|size:2',
            'province'              => 'nullable|between:2,255',
            'address'               => 'nullable|between:2,255',
            'locality'              => 'between:2,255',
            'zip'                   => 'nullable|between:2,255',
            'latitude'              => 'numeric',
            'longitude'             => 'numeric',
        ]);

        $object = Monument::create($data);

        // set architects
        if(! empty($object['architects_id'])) $object->architects()->sync($object['architects_id']);

        return $object;
    }

    public function update(array $data, int $id)
    {
        $this->validate($data, [
            'id'                    => 'required|numeric',
            'original_name'         => 'nullable|between:2,255',
            'current_name'          => 'required|between:2,255',
            'slug'                  => 'required|between:2,255',
            'other_denominations'   => 'nullable|between:2,255',
            'original_use'          => 'nullable|between:2,255',
            'current_use'           => 'nullable|between:2,255',
            'commission'            => 'nullable|integer|digits:4',
            'completion'            => 'nullable|integer|digits:4',
            'rapporteur_name'       => 'nullable|between:2,255',
            'rapporteur_email'      => 'nullable|between:2,255',
            'rapporteur_date'       => 'nullable|integer',
            'percentage_progress'   => 'nullable|integer',
            'links'                 => 'nullable|array',
            'country_id'            => 'nullable|size:2',
            'province'              => 'nullable|between:2,255',
            'address'               => 'nullable|between:2,255',
            'locality'              => 'between:2,255',
            'zip'                   => 'nullable|between:2,255',
            'latitude'              => 'numeric',
            'longitude'             => 'numeric',
        ]);

        $object = Monument::findOrFail($id);

        $object->fill($data);

        // check is model
        if ($object->isClean()) throw new ModelNotChangeException('At least one value must change');

        // save changes
        $object->save();

        // peoples
        $peoples = [];

        // set people relations
        if(is_array($data['architects_id'])) $peoples = array_merge($peoples, $data['architects_id']);
        if(is_array($data['engineers_id'])) $peoples = array_merge($peoples, $data['engineers_id']);
        if(is_array($data['artists_id'])) $peoples = array_merge($peoples, $data['artists_id']);
        if(is_array($data['others_id'])) $peoples = array_merge($peoples, $data['others_id']);

        // set peoples
        $object->peoples()->sync($peoples);

        // characteristics
        $characteristics = [];

        // set characteristic relations
        if(is_array($data['reinforcement_types_id'])) $characteristics = array_merge($characteristics, $data['reinforcement_types_id']);
        if(is_array($data['concrete_types_id'])) $characteristics = array_merge($characteristics, $data['concrete_types_id']);
        if(is_array($data['finishes_id'])) $characteristics = array_merge($characteristics, $data['finishes_id']);
        if(is_array($data['construction_methods_id'])) $characteristics = array_merge($characteristics, $data['construction_methods_id']);
        if(is_array($data['structural_types_id'])) $characteristics = array_merge($characteristics, $data['structural_types_id']);

        // set characteristics
        $object->characteristics()->sync($characteristics);

        return $object;
    }
}
