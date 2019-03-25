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
        $this->call(InnovaConcreteGroupTableSeeder::class);
        $this->call(InnovaConcreteTypeTableSeeder::class);
        $this->call(InnovaConcreteCharacteristicTableSeeder::class);

        Model::reguard();
    }
}

/*
 * Command to run:
 * php artisan db:seed --class="InnovaConcreteTableSeeder"
 */
