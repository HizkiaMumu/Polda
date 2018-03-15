<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubJenisKejahatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_jenis_kejahatans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_sub_jenis_kejahatan');
            $table->string('icon_sub_jenis_kejahatan');
            $table->text('deskripsi');
            $table->integer('jenis_kejahatan_id')->unsigned();

            $table->foreign('jenis_kejahatan_id')->references('id')->on('jenis_kejahatans')->onDelete('cascade');
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
        Schema::dropIfExists('sub_jenis_kejahatans');
    }
}
