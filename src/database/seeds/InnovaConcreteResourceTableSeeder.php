<?php

use Illuminate\Database\Seeder;
use Syscover\Admin\Models\Resource;

class InnovaConcreteResourceTableSeeder extends Seeder {

    public function run()
    {
        Resource::insert([
            ['id' => 'innova',                          'name' => 'Innova Concrete Package',                    'package_id' => 1001],
            ['id' => 'innova-monument',                 'name' => 'Monument',                                   'package_id' => 1001],
            ['id' => 'innova-database',                 'name' => 'Database',                                   'package_id' => 1001],
            ['id' => 'innova-characteristic',           'name' => 'Characteristic',                             'package_id' => 1001],
            ['id' => 'innova-type',                     'name' => 'Type',                                       'package_id' => 1001],
            ['id' => 'innova-people',                   'name' => 'People',                                     'package_id' => 1001],
            ['id' => 'innova-group',                    'name' => 'Group',                                      'package_id' => 1001],
        ]);
    }
}

/*
 * Command to run:
 * php artisan db:seed --class="InnovaConcreteResourceTableSeeder"
 */
