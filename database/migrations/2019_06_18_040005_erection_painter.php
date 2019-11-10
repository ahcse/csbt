<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ErectionPainter extends Migration
{
	public function up() {
		Schema::create( 'erection_painter', function ( Blueprint $table ) {
			$table->bigIncrements( 'id' );
			$table->integer( 'client_id' )->nullable();
			$table->string( 'accommodation' )->nullable();
			$table->string( 'date' )->nullable();
			$table->integer( 'qty' )->nullable();
			$table->integer( 'cost' )->nullable();
			$table->string( 'total_cost' )->nullable();
			$table->string( 'remarks' )->nullable();
			$table->timestamps();
		} );
	}

	public function down() {
		Schema::dropIfExists( 'erection_painter' );
	}
}
