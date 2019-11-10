<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinalDataCollectionsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create( 'final_data_collections', function ( Blueprint $table ) {
			$table->bigIncrements( 'id' );
			$table->integer( 'client_id' )->nullable();
			$table->string( 'structure_no' )->nullable();
			$table->string( 'project_address' )->nullable();
			$table->date( 'project_start_date' )->nullable();
			$table->date( 'project_delivery_request_date' )->nullable();
			$table->double( 'contract_value' )->nullable();
			$table->string( 'consultant_name' )->nullable();
			$table->string( 'consultant_number' )->nullable();
			$table->double( 'total_area' )->nullable();
			$table->string( 'exterior_column_base' )->nullable();
			$table->double( 'width' )->nullable();
			$table->double( 'span_length' )->nullable();
			$table->double( 'length' )->nullable();
			$table->double( 'bay_spacing' )->nullable();
			$table->double( 'eave_height' )->nullable();
			$table->double( 'central_height' )->nullable();
			$table->string( 'roof_type' )->nullable();
			$table->string( 'slope' )->nullable();

			$table->string( 'interior_column_base' )->nullable();
			$table->double( 'mezzanine_width' )->nullable();
			$table->double( 'mezzanine_length' )->nullable();
			$table->date( 'mezzanine_height' )->nullable();
			$table->double( 'end_wall_column_spacing' )->nullable();
			$table->string( 'open_wall_condition' )->nullable();
			$table->string( 'wall_bracing' )->nullable();
			$table->string( 'roof_bracing' )->nullable();
			$table->double( 'clear_height' )->nullable();
			$table->string( 'eave_type' )->nullable();
			$table->double( 'roof_sheet' )->nullable();
			$table->double( 'wall_sheet' )->nullable();
			$table->double( 'capping_etc' )->nullable();
			$table->string( 'rain_water_down_pipe' )->nullable();
			$table->string( 'insulation' )->nullable();
			$table->string( 'type_frames' )->nullable();
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
		Schema::dropIfExists( 'final_data_collections' );
	}
}
