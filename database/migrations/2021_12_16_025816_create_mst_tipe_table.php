<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstTipeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_tipe', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('merk_id');
            $table->foreign('merk_id')->references('id')->on('mst_merk')->onDelete('cascade');
            $table->string('nama', 255);
            $table->integer('active')->default(0)->comment('0 => N, 1 => Y');
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
        Schema::dropIfExists('mst_tipe');
    }
}
