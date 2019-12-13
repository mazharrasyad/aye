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
            $table->enum('legalitas',['0','1'])->default('0');
            $table->enum('prospek',['0','1'])->default('0');
            $table->enum('budget',['0','1'])->default('0');
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
