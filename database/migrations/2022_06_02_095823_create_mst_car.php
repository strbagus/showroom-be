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
            $table->tinyInteger('type_id')->unsigned();
            $table->foreign('type_id')->references('id')->on('ref_type');
            $table->tinyInteger('merk_id')->unsigned();
            $table->foreign('merk_id')->references('id')->on('ref_merk');
            $table->smallInteger('model_id')->unsigned();
            $table->foreign('model_id')->references('id')->on('ref_model');
            $table->smallInteger('machine');
            $table->string('color', 20);
            $table->integer('sell_price');
            $table->integer('buy_price')->nullable();
            $table->char('plat', 2);
            $table->enum('fuel', ['Bensin', 'Solar']);
            $table->enum('status', ['Dijual', 'Terjual']);
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
