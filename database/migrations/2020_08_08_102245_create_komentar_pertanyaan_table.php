<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomentarPertanyaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komentar_pertanyaan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('tanggal_dibuat');

            $table->unsignedBigInteger('pertanyaan_id');
            $table->foreign('pertanyaan_id')->references('id')->on('pertanyaan');
            $table->unsignedBigInteger('profil_id');
            $table->foreign('profil_id')->references('id')->on('profil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('komentar_pertanyaan');
        // Schema::table('komentar_pertanyaan', function (Blueprint $table) {
        //     $table->dropForeign(['profil_id']);
        //     $table->dropColumn(['profil_id']);
        //     $table->dropForeign(['pertanyaan_id']);
        //     $table->dropColumn(['pertanyaan_id']);
        // });
    }
}
