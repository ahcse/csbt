<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeFieldsTypeInErectionMedicalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('erection_medicals', function (Blueprint $table) {
            //
	        $table->integer('quantity')->nullable()->change();
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
	        $table->string('quantity')->nullable()->change();
        });
    }
}
