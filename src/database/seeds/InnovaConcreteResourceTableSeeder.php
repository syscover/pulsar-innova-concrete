<?php

use Illuminate\Database\Seeder;
use Syscover\Admin\Models\Resource;

class InnovaConcreteResourceTableSeeder extends Seeder {

    public function run()
    {
        Resource::insert([
            ['id' => 'innova-concrete',               'name' => 'Innova Concrete',                              'package_id' => 1001],
        ]);
    }
}

/*
 * Command to run:
 * php artisan db:seed --class="InnovaConcreteResourceTableSeeder"
 */
