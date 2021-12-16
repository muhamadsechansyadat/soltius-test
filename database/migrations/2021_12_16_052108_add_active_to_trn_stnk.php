<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddActiveToTrnStnk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trn_stnk', function (Blueprint $table) {
            $table->integer('active')->default(0)->comment('0 => N, 1 => Y')->before('created_at');
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
