<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrnStnkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trn_stnk', function (Blueprint $table) {
            $table->string('no_polisi', 20)->primary();
            $table->string('nama_pemilik', 255);
            $table->text('alamat');
            $table->unsignedBigInteger('merk_id');
            $table->foreign('merk_id')->references('id')->on('mst_merk')->onDelete('cascade');
            $table->unsignedBigInteger('tipe_id');
            $table->foreign('tipe_id')->references('id')->on('mst_tipe')->onDelete('cascade');
            $table->string('model', 255);
            $table->string('no_rangka', 255);
            $table->string('no_mesin', 255);
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
        Schema::dropIfExists('trn_stnk');
    }
}
