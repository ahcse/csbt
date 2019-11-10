<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration {

	public function up() {
		Schema::create( 'clients', function ( Blueprint $table ) {
			$table->bigIncrements( 'id' );
			$table->string( 'name' )->nullable();
			$table->string( 'project_name' )->nullable();
			$table->string( 'responsible_person' )->nullable();
			$table->integer( 'number' )->nullable();
			$table->integer( 'phone' )->nullable();
			$table->integer( 'fax' )->nullable();
			$table->string( 'project_location' )->nullable();
			$table->string( 'office_address' )->nullable();
			$table->string( 'project_address' )->nullable();
			$table->string( 'remarks' )->nullable();
			$table->string( 'status' )->nullable();
			$table->dateTime( 'deleted_at' )->nullable();
			$table->timestamps();
		} );
	}

	public function down() {
		Schema::dropIfExists( 'clients' );
	}
}
