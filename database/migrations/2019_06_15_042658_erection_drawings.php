<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ErectionDrawings extends Migration {
	public function up() {

		Schema::create( 'erection_drawings', function ( Blueprint $table ) {
			$table->bigIncrements( 'id' );
			$table->integer( 'client_id' )->nullable()->unique();
			$table->string( 'description' )->nullable();
			$table->string( 'remarks' )->nullable();
			$table->date( 'uploaded_at' )->nullable();
			$table->string( 'attachment' )->nullable();
			$table->dateTime( 'deleted_at' )->nullable();
			$table->timestamps();
		} );
	}

	public function down() {
		//
		Schema::dropIfExists( 'erection_drawings' );
	}
}
