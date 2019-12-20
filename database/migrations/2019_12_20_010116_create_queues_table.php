<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQueuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('queues', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->string('number');
            $table->string('service');
            $table->datetime('schedule');
            $table->string('surat_kelahiran')->nullable();
            $table->string('akta_kelahiran')->nullable();
            $table->string('akta_ayah')->nullable();
            $table->string('akta_ibu')->nullable();
            $table->string('ktp_ayah')->nullable();
            $table->string('ktp_ibu')->nullable();
            $table->string('kartu_keluarga')->nullable();
            $table->string('buku_nikah')->nullable();
            $table->string('surat_cerai')->nullable();
            $table->string('photo')->nullable();
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
        Schema::dropIfExists('queues');
    }
}
