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
        Schema::create('strukturals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_guru');
            $table->foreign('id_guru')->references('id')->on('gurus')->onDelete('cascade');
            $table->unsignedBigInteger('id_jabatan');
            $table->foreign('id_jabatan')->references('id')->on('jabatans')->onDelete('cascade');
            $table->string('sampul');
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
        Schema::dropIfExists('strukturals');
    }
};
