<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ErectionConsumables extends Migration
{
	public function up() {
		Schema::create( 'erection_consumables', function ( Blueprint $table ) {
			$table->bigIncrements( 'id' );
			$table->integer( 'client_id' )->nullable();
			$table->string( 'description' )->nullable();
			$table->string( 'date' )->nullable();
			$table->string( 'qty' )->nullable();
			$table->integer( 'unit' )->nullable();
			$table->integer( 'cost' )->nullable();
			$table->string( 'total_cost' )->nullable();
			$table->string( 'remarks' )->nullable();
			$table->timestamps();
		} );
	}

	public function down() {
		Schema::dropIfExists( 'erection_consumables' );
	}
}
