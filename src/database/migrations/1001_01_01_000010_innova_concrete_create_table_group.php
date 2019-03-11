<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InnovaConcreteCreateTableGroup extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if(! Schema::hasTable('innova_concrete_group'))
		{
			Schema::create('innova_concrete_group', function (Blueprint $table) {
				$table->engine = 'InnoDB';

                $table->increments('id');
				$table->string('name');
                $table->timestamps();
                $table->softDeletes();
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
        Schema::dropIfExists('innova_concrete_group');
	}
}
