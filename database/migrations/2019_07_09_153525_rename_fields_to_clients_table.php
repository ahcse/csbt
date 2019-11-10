<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameFieldsToClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('erection_medicals', function (Blueprint $table) {
	        $table->renameColumn('qty', 'quantity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('erection_medicals', function (Blueprint $table) {
            //
	        $table->renameColumn('quantity', 'qty');
        });
    }
}
