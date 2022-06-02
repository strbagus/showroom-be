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
        Schema::create('mst_admin', function (Blueprint $table) {
            $table->id();
            $table->string('username', 15)->unique();
            $table->string('name', 30);
            $table->string('password');
            $table->enum('level', ['Admin', 'Super']);
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
        Schema::dropIfExists('mst_admin');
    }
};
