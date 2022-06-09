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
        Schema::create('ref_model', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('name', 20);
            $table->tinyInteger('merk_id')->unsigned();
            $table->foreign('merk_id')->references('id')->on('ref_merk');
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
        Schema::dropIfExists('ref_model');
    }
};
