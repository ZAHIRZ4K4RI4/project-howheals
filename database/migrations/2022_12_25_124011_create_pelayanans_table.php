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
        Schema::create('pelayanans', function (Blueprint $table) {
            $table->id();
            $table->string('type_sepatu',);
            $table->string('pelayanan');
            $table->string('status');
            $table->integer('harga');
            $table->date('tanggal_masuk');
            $table->string('estimasi_selesai');
            $table->unsignedBigInteger('id_customers');
            $table->foreign('id_customers')->references('id')->on('customers')->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('pelayanans');
    }
};