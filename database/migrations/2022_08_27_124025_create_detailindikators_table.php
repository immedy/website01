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
            $table->foreignId("refindikator_id");
            $table->smallInteger('januari');
            $table->smallInteger('februari');
            $table->smallInteger('maret');
            $table->smallInteger('april');
            $table->smallInteger('juni');
            $table->smallInteger('juli');
            $table->smallInteger('agustus');
            $table->smallInteger('september');
            $table->smallInteger('oktober');
            $table->smallInteger('november');
            $table->smallInteger('desember');
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
