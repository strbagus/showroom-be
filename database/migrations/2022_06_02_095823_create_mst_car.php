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
        Schema::create('mst_car', function (Blueprint $table) {
            $table->id();
            $table->string('name', 35);
            $table->smallInteger('year');
            $table->enum('transmition', ['Manual', 'Matic']);
            $table->smallInteger('mileage');
            $table->char('merk_code', 2);
            $table->foreign('merk_code')->references('merk_code')->on('ref_merk');
            $table->char('model_code', 3);
            $table->foreign('model_code')->references('model_code')->on('ref_model');
            $table->smallInteger('machine');
            $table->string('color', 20);
            $table->integer('sell_price');
            $table->integer('buy_price');
            $table->char('plat', 2);
            $table->enum('fuel', ['Bensin', 'Solar']);
            $table->enum('status', ['Dijual', 'Terjual']);
            // $table->bigInteger('seller_id');
            // $table->foreign('seller_id')->references('id')->on('mst_seller');
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
        Schema::dropIfExists('mst_car');
    }
};
