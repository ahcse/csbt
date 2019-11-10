<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DwpMaterialPurchases extends Migration
{
	public function up() {
		Schema::create( 'dwp_material_purchases', function ( Blueprint $table ) {
			$table->bigIncrements( 'id' );
			$table->integer( 'client_id' )->nullable();
			$table->string( 'material_type' )->nullable();
			$table->string( 'description' )->nullable();
			$table->integer( 'qty' )->nullable();
			$table->integer( 'rate' )->nullable();
			$table->string( 'total' )->nullable();
			$table->string( 'remarks' )->nullable();
			$table->timestamps();
		} );
	}

	public function down() {
		Schema::dropIfExists( 'dwp_material_purchases' );
	}
}