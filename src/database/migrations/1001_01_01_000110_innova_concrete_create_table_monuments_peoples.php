<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InnovaConcreteCreateTableMonumentsPeoples extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if(! Schema::hasTable('innova_concrete_monuments_peoples'))
        {
            Schema::create('innova_concrete_monuments_peoples', function (Blueprint $table) {
                $table->engine = 'InnoDB';

                $table->integer('monument_id')->unsigned();
                $table->integer('people_id')->unsigned();

                $table->primary(['monument_id', 'people_id']);
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
        Schema::dropIfExists('innova_concrete_monuments_peoples');
	}
}
