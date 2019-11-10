<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrimaryDataCollectionsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create( 'primary_data_collections', function ( Blueprint $table ) {
			$table->bigIncrements( 'id' );
			$table->integer( 'client_id' )->nullable()->unique();
			$table->double( 'height' )->nullable();
			$table->double( 'width' )->nullable();
			$table->double( 'length' )->nullable();
			$table->double( 'brick_wall_height' )->nullable();
			$table->string( 'insulation' )->nullable();
			$table->string( 'canopy' )->nullable();
			$table->string( 'gate' )->nullable();
			$table->string( 'roof_monitoring' )->nullable();
			$table->string( 'live_load' )->nullable();
			$table->string( 'seismic_zone' )->nullable();
			$table->dateTime( 'deleted_at' )->nullable();
			$table->timestamps();
		} );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists( 'primary_data_collections' );
	}
}
