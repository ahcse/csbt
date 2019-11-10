<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DwpErectionStatus extends Migration {
	public function up() {
		Schema::create( 'dwp_erection_status', function ( Blueprint $table ) {
			$table->bigIncrements( 'id' );
			$table->integer( 'client_id' )->nullable();
			$table->string( 'phase_no' )->nullable();
			$table->string( 'material_name' )->nullable();
			$table->integer( 'grid_line' )->nullable();
			$table->integer( 'part_mark' )->nullable();
			$table->string( 'tone' )->nullable();
			$table->string( 'used' )->nullable();
			$table->string( 'remarks' )->nullable();
			$table->timestamps();
		} );
	}

	public function down() {
		Schema::dropIfExists( 'dwp_erection_status' );
	}
}