<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DwpManpowerStatement extends Migration {
	public function up() {
		Schema::create( 'dwp_manpower_statement', function ( Blueprint $table ) {
			$table->bigIncrements( 'id' );
			$table->integer( 'client_id' )->nullable();
			$table->string( 'description' )->nullable();
			$table->string( 'total_manpower' )->nullable();
			$table->string( 'remarks' )->nullable();
			$table->timestamps();
		} );
	}

	public function down() {
		Schema::dropIfExists( 'dwp_manpower_statement' );
	}
}
