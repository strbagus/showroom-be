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
        Schema::create('mst_seller', function (Blueprint $table) {
            $table->id();
            $table->string('name', 35);
            $table->text('address');
            $table->string('phone', 20);
            $table->string('email')->nullable();
            // $table->int('mobil_id');
            // $table->foreign('mobil_id')->references('id')->on('mst_mobil');
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
        Schema::dropIfExists('mst_seller');
    }
};
