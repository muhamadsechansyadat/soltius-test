<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrnStnkBiayaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trn_stnk_biaya', function (Blueprint $table) {
            $table->id();
            $table->string('no_polisi');
            $table->string('nama', 255);
            $table->bigInteger('biaya');
            $table->bigInteger('denda');
            $table->bigInteger('total');
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
        Schema::dropIfExists('trn_stnk_biaya');
    }
}
