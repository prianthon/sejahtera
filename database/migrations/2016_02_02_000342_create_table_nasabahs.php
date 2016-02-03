<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableNasabahs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nasabahs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_lengkap',100);
            $table->string('no_rekening',15);
            $table->text('alamat');
            $table->text('foto');
            $table->integer('saldo_terakhir');
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
        Schema::drop('nasabahs');
    }
}
