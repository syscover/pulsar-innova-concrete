<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class InnovaConcreteTableSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();

        $this->call(InnovaConcretePackageTableSeeder::class);
        $this->call(InnovaConcreteResourceTableSeeder::class);

        Model::reguard();
    }
}

/*
 * Command to run:
 * php artisan db:seed --class="InnovaConcreteTableSeeder"
 */
