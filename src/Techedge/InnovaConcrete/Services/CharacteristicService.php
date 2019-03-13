<?php namespace Techedge\InnovaConcrete\Services;

use Syscover\Core\Exceptions\ModelNotChangeException;
use Syscover\Core\Services\Service;
use Techedge\InnovaConcrete\Models\Type;

class CharacteristicService extends Service
{
    public function store(array $data)
    {
        $this->validate($data, [
            'name'      => 'required|between:2,255',
            'type_id'  => 'required|exists:innova_concrete_type,id'
        ]);

        Type::create($data);
    }

    public function update(array $data, int $id)
    {
        $this->validate($data, [
            'id'        => 'numeric',
            'name'      => 'between:2,255',
            'type_id'   => 'required|exists:innova_concrete_type,id'
        ]);

        $object = Type::findOrFail($id);

        $object->fill($data);

        // check is model
        if ($object->isClean()) throw new ModelNotChangeException('At least one value must change');

        // save changes
        $object->save();

        return $object;
    }
}
