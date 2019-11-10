<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProjectWorkSchedules extends Migration {
	public function up() {
		Schema::create( 'project_work_schedules', function ( Blueprint $table ) {
			$table->bigIncrements( 'id' );
			$table->integer( 'client_id' )->nullable();
			$table->string( 'activities' )->nullable();
			$table->date( 'start_at' )->nullable();
			$table->date( 'complete_at' )->nullable();
			$table->date( 'act_start_at' )->nullable();
			$table->date( 'act_complete_at' )->nullable();
			$table->string( 'remarks' )->nullable();
			$table->timestamps();
			$table->softDeletes();
		} );
	}

	public function down() {
		Schema::dropIfExists( 'project_work_schedules' );
	}
}
