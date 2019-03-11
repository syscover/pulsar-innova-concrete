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
				$table->string('original_name');
                $table->string('current_name');
                $table->string('other_denominations');
                $table->string('original_use');
                $table->string('current_use');
                $table->integer('commission')->unsigned();
                $table->integer('completion')->unsigned();
                $table->text('description');
                $table->string('rapporteur_name');
                $table->string('rapporteur_email');
                $table->integer('rapporteur_date')->unsigned();

                $table->json('links'); // object [{name:'',url:''}]

                // geolocation data
                $table->string('country_id', 2)->nullable();
                $table->string('province')->nullable();
                $table->string('address')->nullable();
                $table->string('locality')->nullable();
                $table->string('zip')->nullable();
                $table->decimal('latitude', 17, 14)->nullable();
                $table->decimal('longitude', 17, 14)->nullable();

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
