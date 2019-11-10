<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DwpMaterialReceiveds extends Migration
{
	public function up() {
		Schema::create( 'dwp_material_receiveds', function ( Blueprint $table ) {
			$table->bigIncrements( 'id' );
			$table->integer( 'client_id' )->nullable();
			$table->string( 'date' )->nullable();
			$table->string( 'chalan_no' )->nullable();
			$table->integer( 'material_type' )->nullable();
			$table->integer( 'qty' )->nullable();
			$table->string( 'total_weight' )->nullable();
			$table->string( 'remarks' )->nullable();
			$table->timestamps();
		} );
	}

	public function down() {
		Schema::dropIfExists( 'dwp_material_receiveds' );
	}
}
