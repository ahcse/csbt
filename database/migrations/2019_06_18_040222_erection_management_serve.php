<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ErectionManagementServe extends Migration {
	public function up() {
		Schema::create( 'erection_management_serve', function ( Blueprint $table ) {
			$table->bigIncrements( 'id' );
			$table->integer( 'client_id' )->nullable();
			$table->string( 'contractor' )->nullable();
			$table->string( 'date' )->nullable();
			$table->integer( 'rate' )->nullable();
			$table->integer( 'unit' )->nullable();
			$table->string( 'total_cost' )->nullable();
			$table->string( 'remarks' )->nullable();
			$table->timestamps();
		} );
	}

	public function down() {
		Schema::dropIfExists( 'erection_management_serve' );
	}
}