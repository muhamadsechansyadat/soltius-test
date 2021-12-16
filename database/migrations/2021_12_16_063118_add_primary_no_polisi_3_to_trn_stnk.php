<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPrimaryNoPolisi3ToTrnStnk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trn_stnk', function (Blueprint $table) {
            // $table->string('plat_nomor', 20)->after('id')->primary();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trn_stnk', function (Blueprint $table) {
            //
        });
    }
}
