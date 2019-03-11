<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InnovaConcreteCreateTablePeople extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if(! Schema::hasTable('innova_concrete_people'))
		{
			Schema::create('innova_concrete_people', function (Blueprint $table) {
				$table->engine = 'InnoDB';

                $table->increments('id');
				$table->string('name');
                $table->integer('group_id')->unsigned();
                $table->timestamps();
                $table->softDeletes();

                $table->foreign('group_id', 'fk01_innova_concrete_people')
                    ->references('id')
                    ->on('innova_concrete_group')
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
        Schema::dropIfExists('innova_concrete_people');
	}
}
