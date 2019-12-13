<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengajuanusahaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuanusaha', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');

            $table->unsignedInteger('jenis_id')->nullable();
            $table->foreign('jenis_id')
                ->on('jenis')
                ->references('id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('deskripsi');
            $table->string('alamat');
            $table->string('foto');
            $table->string('budget');
            $table->string('durasi');
            $table->unsignedInteger('user_id')->nullable();
            $table->foreign('user_id')
                ->on('users')
                ->references('id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            
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
        Schema::dropIfExists('pengajuanusaha');
    }
}
