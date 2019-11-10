<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DwpTonnageErections extends Migration
{
	public function up() {
		Schema::create( 'dwp_tonnage_erections', function ( Blueprint $table ) {
			$table->bigIncrements( 'id' );
			$table->integer( 'client_id' )->nullable();
			$table->string( 'material_decs' )->nullable();
			$table->string( 'part_mark' )->nullable();
			$table->integer( 'qty' )->nullable();
			$table->integer( 'weight' )->nullable();
			$table->string( 'cumulative_weight' )->nullable();
			$table->string( 'total_erection' )->nullable();
			$table->string( 'remarks' )->nullable();
			$table->timestamps();
		} );
	}

	public function down() {
		Schema::dropIfExists( 'dwp_tonnage_erections' );
	}
}