<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class WorkOrderTimeSchedules extends Migration {
	public function up() {
		Schema::create( 'work_order_time_schedules', function ( Blueprint $table ) {
			$table->bigIncrements( 'id' );
			$table->integer( 'client_id' )->nullable();
			$table->string( 'particular' )->nullable();
			$table->date( 'start_date' )->nullable();
			$table->date( 'complete_date' )->nullable();
			$table->string( 'remarks' )->nullable();
			$table->dateTime( 'deleted_at' )->nullable();
			$table->timestamps();
		} );
	}

	public function down() {
		Schema::dropIfExists( 'work_order_time_schedules' );
	}
}
