<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MonthlyFundFollows extends Migration {
	public function up() {
		Schema::create( 'monthly_fund_follows', function ( Blueprint $table ) {
			$table->bigIncrements( 'id' );
			$table->integer( 'client_id' )->nullable();
			$table->string( 'particular' )->nullable();
			$table->string( 'description' )->nullable();
			$table->date( 'approve_date' )->nullable();
			$table->double( 'amount' )->nullable();
			$table->string( 'remarks' )->nullable();
			$table->timestamps();
			$table->softDeletes();
		} );
	}

	public function down() {
		Schema::dropIfExists( 'monthly_fund_follows' );
	}
}
