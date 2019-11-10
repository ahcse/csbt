<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProjectInfoDeliverys extends Migration {
	public function up() {
		Schema::create( 'project_info_deliverys', function ( Blueprint $table ) {
			$table->bigIncrements( 'id' );
			$table->integer( 'client_id' )->nullable();
			$table->string( 'mat_type' )->nullable();
			$table->string( 'name_of_mat' )->nullable();
			$table->integer( 'grid_line' )->nullable();
			$table->string( 'nos' )->nullable();
			$table->string( 'part_mark' )->nullable();
			$table->string( 'phase' )->nullable();
			$table->timestamps();
		} );
	}

	public function down() {
		Schema::dropIfExists( 'project_info_deliverys' );
	}
}
