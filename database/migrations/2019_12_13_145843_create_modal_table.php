<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modal', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('validasi_id')->nullable();
            $table->foreign('validasi_id')
                ->on('validasi')
                ->references('id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->double('budget');
            $table->integer('jumlahsaham');
            $table->double('hargasaham');  
            $table->integer('sisasaham');
            $table->integer('durasijual');
            $table->integer('roi');
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
        Schema::dropIfExists('modal');
    }
}
