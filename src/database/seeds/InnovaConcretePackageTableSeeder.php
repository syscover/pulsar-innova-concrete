<?php

use Illuminate\Database\Seeder;
use Syscover\Admin\Models\Package;

class InnovaConcretePackageTableSeeder extends Seeder
{
    public function run()
    {
        Package::insert([
            ['id' => 1001, 'name' => 'Innova Concrete Package', 'root' => 'innova-concrete', 'sort' => 1000, 'active' => true]
        ]);
    }
}

/*
 * Command to run:
 * php artisan db:seed --class="InnovaConcretePackageTableSeeder"
 */
