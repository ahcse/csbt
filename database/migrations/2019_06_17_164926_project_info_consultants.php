<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProjectInfoConsultants extends Migration {
	public function up() {
		Schema::create( 'project_info_consultants', function ( Blueprint $table ) {
			$table->bigIncrements( 'id' );
			$table->integer( 'client_id' )->nullable();
			$table->string( 'employee_name' )->nullable();
			$table->string( 'designation' )->nullable();
			$table->string( 'department' )->nullable();
			$table->integer( 'contact_number' )->nullable();
			$table->string( 'email' )->nullable();
			$table->string( 'status' )->nullable();
			$table->timestamps();
		} );
	}

	public function down() {
		Schema::dropIfExists( 'project_info_consultants' );
	}
}
