<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProjectInfoRiskFactors extends Migration {
	public function up() {
		Schema::create( 'project_info_risk_factors', function ( Blueprint $table ) {
			$table->bigIncrements( 'id' );
			$table->integer( 'client_id' )->nullable();
			$table->string( 'risk_factor' )->nullable();
			$table->string( 'necessary_steps' )->nullable();
			$table->integer( 'remarks' )->nullable();
			$table->timestamps();
		} );
	}

	public function down() {
		Schema::dropIfExists( 'project_info_risk_factors' );
	}
}
