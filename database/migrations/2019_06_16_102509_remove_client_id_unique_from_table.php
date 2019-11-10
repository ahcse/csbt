<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveClientIdUniqueFromTable extends Migration {
	public function up() {
		Schema::table( 'febrication_drawings', function ( Blueprint $table ) {
			$table->dropUnique( [ 'client_id' ] );
		} );

		Schema::table( 'erection_drawings', function ( Blueprint $table ) {
			$table->dropUnique( [ 'client_id' ] );
		} );

		Schema::table( 'proposal_drawings', function ( Blueprint $table ) {
			$table->dropUnique( [ 'client_id' ] );
		} );

		Schema::table( 'final_proposal_drawings', function ( Blueprint $table ) {
			$table->dropUnique( [ 'client_id' ] );
		} );
	}

	public function down() {
		Schema::table( 'febrication_drawings', function ( Blueprint $table ) {
			$table->unique( [ 'client_id' ] );
		} );

		Schema::table( 'erection_drawings', function ( Blueprint $table ) {
			$table->unique( [ 'client_id' ] );
		} );

		Schema::table( 'proposal_drawings', function ( Blueprint $table ) {
			$table->unique( [ 'client_id' ] );
		} );

		Schema::table( 'final_proposal_drawings', function ( Blueprint $table ) {
			$table->unique( [ 'client_id' ] );
		} );
	}
}
