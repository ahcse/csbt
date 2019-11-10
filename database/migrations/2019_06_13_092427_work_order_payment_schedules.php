<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class WorkOrderPaymentSchedules extends Migration {
	public function up() {
		Schema::create( 'work_order_payment_schedules', function ( Blueprint $table ) {
			$table->bigIncrements( 'id' );
			$table->integer( 'client_id' )->nullable();
			$table->string( 'percent' )->nullable();
			$table->string( 'particular' )->nullable();
			$table->string( 'remarks' )->nullable();
			$table->dateTime( 'deleted_at' )->nullable();
			$table->timestamps();
		} );
	}

	public function down() {
		Schema::dropIfExists( 'work_order_payment_schedules' );
	}
}
