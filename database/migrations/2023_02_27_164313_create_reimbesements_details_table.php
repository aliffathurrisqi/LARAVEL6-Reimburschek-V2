<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReimbesementsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reimbesement_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('keterangan');
            $table->decimal('nominal', 20, 2);
            $table->text('image')->nullable();
            $table->integer('outlet_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reimbesement_details');
    }
}
