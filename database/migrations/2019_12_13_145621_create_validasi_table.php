<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateValidasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('validasi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('legalitas');
            $table->string('prospek');
            $table->string('budget');
            $table->unsignedInteger('pengajuanusaha_id')->nullable();
            $table->foreign('pengajuanusaha_id')
                ->on('pengajuanusaha')
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
        Schema::dropIfExists('validasi');
    }
}
