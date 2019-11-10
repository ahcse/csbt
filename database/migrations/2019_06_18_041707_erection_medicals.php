<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ErectionMedicals extends Migration
{
	public function up() {
		Schema::create( 'erection_medicals', function ( Blueprint $table ) {
			$table->bigIncrements( 'id' );
			$table->integer( 'client_id' )->nullable();
			$table->string( 'description' )->nullable();
			$table->string( 'date' )->nullable();
			$table->string( 'qty' )->nullable();
			$table->integer( 'cost' )->nullable();
			$table->string( 'total_cost' )->nullable();
			$table->string( 'remarks' )->nullable();
			$table->timestamps();
		} );
	}

	public function down() {
		Schema::dropIfExists( 'erection_medicals' );
	}
}
