<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InnovaConcreteCreateTableCharacteristic extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if(! Schema::hasTable('innova_concrete_characteristic'))
		{
			Schema::create('innova_concrete_characteristic', function (Blueprint $table) {
				$table->engine = 'InnoDB';

                $table->increments('id');
				$table->string('name');
                $table->integer('type_id')->unsigned();
                $table->timestamps();
                $table->softDeletes();

                $table->foreign('type_id', 'fk01_innova_concrete_characteristic')
                    ->references('id')
                    ->on('innova_concrete_type')
                    ->onDelete('restrict')
                    ->onUpdate('cascade');
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
        Schema::dropIfExists('innova_concrete_characteristic');
	}
}
