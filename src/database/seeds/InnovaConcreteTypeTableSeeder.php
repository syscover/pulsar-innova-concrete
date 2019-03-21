<?php

use Illuminate\Database\Seeder;
use Techedge\InnovaConcrete\Models\Type;

class InnovaConcreteTypeTableSeeder extends Seeder {

    public function run()
    {
        Type::insert([
            ['id' => 1,     'name' => 'Type of concrete by reinforcement'],
            ['id' => 2,     'name' => 'Type of concrete'],
            ['id' => 3,     'name' => 'Finishes - Architectural concrete'],
            ['id' => 4,     'name' => 'Construction method'],
            ['id' => 5,     'name' => 'Structural types - form/shape']
        ]);
    }
}

/*
 * Command to run:
 * php artisan db:seed --class="InnovaConcreteTypeTableSeeder"
 */
