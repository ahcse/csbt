<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinalEstimationsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create( 'final_estimations', function ( Blueprint $table ) {
			$table->bigIncrements( 'id' );
			$table->integer( 'client_id' )->nullable();
			$table->string( 'part_mark' )->nullable();
			$table->string( 'description' )->nullable();
			$table->double( 'length' )->nullable();
			$table->double( 'width' )->nullable();
			$table->double( 'thickness' )->nullable();
			$table->double( 'number' )->nullable();
			$table->double( "quantity" )->nullable();
			$table->double( "rate" )->nullable();
			$table->double( "amount" )->nullable();
			$table->string( "type" )->nullable();
			$table->string( "category_type" )->nullable();
			$table->dateTime( 'deleted_at' )->nullable();
			$table->timestamps();
		} );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists( 'final_estimations' );
	}
}
