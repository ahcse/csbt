<?php
Schema::create( 'tools', function ( Blueprint $table ) {
	$table->bigIncrements( 'id' );
	$table->integer( 'client_id' )->nullable();
	$table->string( 'category' )->nullable();
	$table->double( 'quantity' )->nullable();
	$table->string( 'remarks' )->nullable();
	$table->date( 'date' )->nullable();
	$table->timestamps();
	$table->softDeletes();
} );

Schema::create( 'monthly_fund_follows', function ( Blueprint $table ) {
	$table->bigIncrements( 'id' );
	$table->integer( 'client_id' )->nullable();
	$table->string( 'particular' )->nullable();
	$table->string( 'description' )->nullable();
	$table->string( 'remarks' )->nullable();
	$table->string( 'file' )->nullable();
	$table->double( 'amount' )->nullable();
	$table->date( 'date' )->nullable();
	$table->timestamps();
	$table->softDeletes();
} );


?>