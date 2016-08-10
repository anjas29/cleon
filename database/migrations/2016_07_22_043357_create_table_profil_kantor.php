<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProfilKantor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profil_kantor', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('hotline');
            $table->string('jam_kerja');
            $table->string('sms_service');
            $table->string('alamat');
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
        Schema::drop('profil_kantor');
    }
}
