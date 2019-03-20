<?php

use Illuminate\Database\Seeder;
use Techedge\InnovaConcrete\Models\Group;

class InnovaConcreteGroupTableSeeder extends Seeder {

    public function run()
    {
        Group::insert([
            ['id' => 1,     'name' => 'Architects'],
            ['id' => 2,     'name' => 'Engineers'],
            ['id' => 3,     'name' => 'Artists'],
            ['id' => 4,     'name' => 'Others']
        ]);
    }
}

/*
 * Command to run:
 * php artisan db:seed --class="InnovaConcreteGroupTableSeeder"
 */
