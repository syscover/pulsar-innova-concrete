<?php

use Illuminate\Database\Seeder;
use Techedge\InnovaConcrete\Models\Characteristic;

class InnovaConcreteCharacteristicTableSeeder extends Seeder {

    public function run()
    {
        Characteristic::insert([
            // Type of concrete by reinforcement
            ['id' => 1,     'type_id' => 1,    'name' => 'Plain concrete'],
            ['id' => 2,     'type_id' => 1,    'name' => 'Reinforced concrete'],
            ['id' => 3,     'type_id' => 1,    'name' => 'Prestressed concrete'],
            ['id' => 4,     'type_id' => 1,    'name' => 'Ferrocement'],

            // Type of concrete
            ['id' => 5,     'type_id' => 2,    'name' => 'Concrete'],
            ['id' => 6,     'type_id' => 2,    'name' => 'Special concrete'],

            // Finishes - Architectural concrete
            ['id' => 7,     'type_id' => 3,    'name' => 'Architectural concrete'],
            ['id' => 8,     'type_id' => 3,    'name' => 'Exposed aggregate concrete'],
            ['id' => 9,     'type_id' => 3,    'name' => 'Coloured concrete'],

            // Construction method
            ['id' => 10,    'type_id' => 4,    'name' => 'Cast-in-place concrete, in-situ concrete'],
            ['id' => 11,    'type_id' => 4,    'name' => 'Precast concrete, precast element'],
            ['id' => 12,    'type_id' => 4,    'name' => 'Concrete mansonry unit, such as concrete blocks'],
            ['id' => 13,    'type_id' => 4,    'name' => 'Dowels and assembled sections'],
            ['id' => 14,    'type_id' => 4,    'name' => 'Facade cladding'],
            ['id' => 15,    'type_id' => 4,    'name' => 'Sprayed concrete, shotcrete'],
            ['id' => 16,    'type_id' => 4,    'name' => 'Formwork, falsework, centering'],

            // Structural types - form/shape'
            ['id' => 17,    'type_id' => 5,    'name' => 'One-dimensional/concrete frame '],
            ['id' => 18,    'type_id' => 5,    'name' => 'One-dimensional/ [trussed] beam'],
            ['id' => 19,    'type_id' => 5,    'name' => 'One-dimensional/ [mushroom] column'],
            ['id' => 20,    'type_id' => 5,    'name' => 'One-dimensional/arch [bridge]'],
            ['id' => 21,    'type_id' => 5,    'name' => 'One-dimensional/diaphragmatic arches'],
            ['id' => 22,    'type_id' => 5,    'name' => 'Two-dimensional/[shear] wall'],
            ['id' => 23,    'type_id' => 5,    'name' => 'Two-dimensional/[doubled spherical] dome'],
            ['id' => 24,    'type_id' => 5,    'name' => 'Two-dimensional/[inverted] cupola, [pyramidal] cupola'],
            ['id' => 25,    'type_id' => 5,    'name' => 'Two-dimensional/[cylindrical two-dimensional/barrel] vault'],
            ['id' => 26,    'type_id' => 5,    'name' => 'Two-dimensional/[cantilever] roof, [suspended] roof'],
            ['id' => 27,    'type_id' => 5,    'name' => 'Two-dimensional/[waffle] slab'],
            ['id' => 28,    'type_id' => 5,    'name' => 'Two-dimensional/folded plate structure'],
            ['id' => 29,    'type_id' => 5,    'name' => 'Two-dimensional/shell structure'],
            ['id' => 30,    'type_id' => 5,    'name' => 'Three-dimensional/mass concrete, solid masses'],
            ['id' => 31,    'type_id' => 5,    'name' => 'Three-dimensional space structure'],
            ['id' => 32,    'type_id' => 5,    'name' => 'Hybrid structures'],
        ]);
    }
}

/*
 * Command to run:
 * php artisan db:seed --class="InnovaConcreteCharacteristicTableSeeder"
 */
