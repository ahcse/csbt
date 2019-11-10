<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DwpWorkProgress extends Migration
{
	public function up() {
		Schema::create( 'dwp_work_progress', function ( Blueprint $table ) {
			$table->bigIncrements( 'id' );
			$table->integer( 'client_id' )->nullable();
			$table->string( 'description' )->nullable();
			$table->string( 'attachment_id' )->nullable();
			$table->string( 'remarks' )->nullable();
			$table->timestamps();
		} );
	}

	public function down() {
		Schema::dropIfExists( 'dwp_work_progress' );
	}
}
