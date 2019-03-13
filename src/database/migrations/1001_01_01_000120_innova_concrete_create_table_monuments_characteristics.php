<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InnovaConcreteCreateTableMonumentsCharacteristics extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if(! Schema::hasTable('innova_concrete_monuments_characteristics'))
        {
            Schema::create('innova_concrete_monuments_characteristics', function (Blueprint $table) {
                $table->engine = 'InnoDB';

                $table->integer('monument_id')->unsigned();
                $table->integer('characteristic_id')->unsigned();

                $table->primary(['monument_id', 'characteristic_id'], 'pk01_innova_concrete_monuments_characteristics');
            });
        }
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::dropIfExists('innova_concrete_monuments_characteristics');
	}
}
