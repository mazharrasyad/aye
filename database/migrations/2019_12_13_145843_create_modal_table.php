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
            $table->string('budget');
            $table->string('jumlahsaham');
            $table->string('hargasaham');  
            $table->string('sisasaham');
            $table->string('durasijual');
            $table->string('roi');
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
