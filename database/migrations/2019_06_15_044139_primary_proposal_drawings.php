<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PrimaryProposalDrawings extends Migration
{
	public function up() {

		Schema::create( 'primary_proposal_drawings', function ( Blueprint $table ) {
			$table->bigIncrements( 'id' );
			$table->integer( 'client_id' )->nullable();
			$table->string( 'description' )->nullable();
			$table->string( 'remarks' )->nullable();
			$table->date( 'uploaded_at' )->nullable();
			$table->string( 'attachment' )->nullable();
			$table->dateTime( 'deleted_at' )->nullable();
			$table->timestamps();
		} );
	}

    public function down()
    {
		//
		Schema::dropIfExists( 'primary_proposal_drawings' );
    }
}
