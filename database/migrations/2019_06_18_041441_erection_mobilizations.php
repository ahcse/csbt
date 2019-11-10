<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ErectionMobilizations extends Migration {
	public function up() {
		Schema::create( 'erection_mobilizations', function ( Blueprint $table ) {
			$table->bigIncrements( 'id' );
			$table->integer( 'client_id' )->nullable();
			$table->string( 'person' )->nullable();
			$table->string( 'date' )->nullable();
			$table->string( 'unit' )->nullable();
			$table->integer( 'cost' )->nullable();
			$table->string( 'total_cost' )->nullable();
			$table->string( 'remarks' )->nullable();
			$table->timestamps();
		} );
	}

	public function down() {
		Schema::dropIfExists( 'erection_mobilizations' );
	}
}
