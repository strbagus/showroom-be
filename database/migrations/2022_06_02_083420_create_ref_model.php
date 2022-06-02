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
            $table->char('model_code', 3)->unique();
            $table->string('name', 20);
            $table->char('merk_code', 2);
            $table->foreign('merk_code')->references('merk_code')->on('ref_merk');
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
