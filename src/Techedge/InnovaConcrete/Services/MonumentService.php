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

        Monument::create($data);
    }

    public function update(array $data, int $id)
    {
        $this->validate($data, [
            'id'                    => 'numeric',
            'original_name'         => 'nullable|between:2,255',
            'current_name'          => 'required|between:2,255',
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

        return $object;
    }
}
