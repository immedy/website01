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
        Schema::create('detailindikators', function (Blueprint $table) {
            $table->id();
            $table->foreignId('menuindikator_id');
            $table->foreignId("refjuduldetailindikator_id");
            $table->smallInteger('januari')->nullable();
            $table->smallInteger('februari')->nullable();
            $table->smallInteger('maret')->nullable();
            $table->smallInteger('april')->nullable();
            $table->smallInteger('juni')->nullable();
            $table->smallInteger('juli')->nullable();
            $table->smallInteger('agustus')->nullable();
            $table->smallInteger('september')->nullable();
            $table->smallInteger('oktober')->nullable();
            $table->smallInteger('november')->nullable();
            $table->smallInteger('desember')->nullable();
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
        Schema::dropIfExists('detailindikators');
    }
};
