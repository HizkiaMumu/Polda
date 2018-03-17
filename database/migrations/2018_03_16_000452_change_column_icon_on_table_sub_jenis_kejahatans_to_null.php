<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeColumnIconOnTableSubJenisKejahatansToNull extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sub_jenis_kejahatans', function (Blueprint $table) {
            $table->string('icon_sub_jenis_kejahatan')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sub_jenis_kejahatans', function (Blueprint $table) {
            //
        });
    }
}
