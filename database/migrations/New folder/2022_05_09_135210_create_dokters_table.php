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
        Schema::create('dokters', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->foreignId('refsmf_id');
            $table->string('foto');
            $table->boolean('residen');
            $table->foreignId('refpoliklinik_id')->nullable();
            $table->boolean('senin')->nullable();
            $table->boolean('selasa')->nullable();
            $table->boolean('rabu')->nullable();
            $table->boolean('kamis')->nullable();
            $table->boolean('jumat')->nullable();
            $table->boolean('status');
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
        Schema::dropIfExists('dokters');
    }
};
