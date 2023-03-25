<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReimbesementsOutlets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reimbesement_outlets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('outlet_name');
            $table->integer('reimbesement_id');
            $table->decimal('total', 20, 2)->nullable();
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
        Schema::dropIfExists('reimbesement_outlets');
    }
}
