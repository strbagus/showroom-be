<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_carimage', function (Blueprint $table) {
            $table->id();
            $table->string('filename', 100);
            $table->bigInteger('car_id')->unsigned();
            $table->foreign('car_id')->references('id')->on('mst_car');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mst_carimage');
    }
};
