<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MaterialRequisitions extends Migration {
	public function up() {
		Schema::create( 'material_requisitions', function ( Blueprint $table ) {
			$table->bigIncrements( 'id' );
			$table->integer( 'client_id' )->nullable();
			$table->string( 'plate_type' )->nullable();
			$table->string( 'plate_size' )->nullable();
			$table->string( 'unit' )->nullable();
			$table->timestamps();
			$table->softDeletes();
		} );
	}

	public function down() {
		Schema::dropIfExists( 'material_requisitions' );
	}
}
