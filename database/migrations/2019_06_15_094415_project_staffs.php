<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProjectStaffs extends Migration {
	public function up() {
		Schema::create( 'project_staffs', function ( Blueprint $table ) {
			$table->bigIncrements( 'id' );
			$table->integer( 'client_id' )->nullable();
			$table->string( 'name' )->nullable();
			$table->string( 'email' )->nullable();
			$table->integer( 'mobile' )->nullable();
			$table->string( 'designation' )->nullable();
			$table->string( 'department' )->nullable();
			$table->string( 'status' )->nullable();
			$table->timestamps();
		} );
	}

	public function down() {
		Schema::dropIfExists( 'project_staffs' );
	}
}
