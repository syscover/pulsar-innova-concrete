<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InnovaConcreteCreateTableMonument extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if(! Schema::hasTable('innova_concrete_monument'))
		{
			Schema::create('innova_concrete_monument', function (Blueprint $table) {
				$table->engine = 'InnoDB';

                $table->increments('id');
				$table->string('original_name')->nullable();
                $table->string('current_name');
                $table->string('other_denominations')->nullable();
                $table->string('original_use')->nullable();
                $table->string('current_use')->nullable();
                $table->integer('commission')->unsigned()->nullable();
                $table->integer('completion')->unsigned()->nullable();
                $table->text('description')->nullable();
                $table->string('rapporteur_name')->nullable();
                $table->string('rapporteur_email')->nullable();
                $table->integer('rapporteur_date')->unsigned()->nullable();
                $table->tinyInteger('percentage')->unsigned()->nullable();
                $table->json('links')->nullable(); // object [{name:'',url:''}]

                // geolocation data
                $table->string('country_id', 2);
                $table->string('province')->nullable();
                $table->string('address')->nullable();
                $table->string('locality');
                $table->string('zip')->nullable();
                $table->decimal('latitude', 17, 14);
                $table->decimal('longitude', 17, 14);

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
        Schema::dropIfExists('innova_concrete_monument');
	}
}
