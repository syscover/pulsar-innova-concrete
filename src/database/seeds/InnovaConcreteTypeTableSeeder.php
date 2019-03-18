<?php

use Illuminate\Database\Seeder;
use Techedge\InnovaConcrete\Models\Type;

class InnovaConcreteTypeTableSeeder extends Seeder {

    public function run()
    {
        Type::insert([
            ['id' => 1,     'name' => 'Concrete use'],
            ['id' => 2,     'name' => 'Construction method'],
            ['id' => 3,     'name' => 'Construction system']
        ]);
    }
}

/*
 * Command to run:
 * php artisan db:seed --class="InnovaConcreteTypeTableSeeder"
 */
