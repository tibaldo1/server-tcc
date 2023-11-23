<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVaquinhasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaquinhas', function (Blueprint $table) {
            $table->id('id_vaquinha');
            $table->string('nome');
            $table->string('descricao');
            $table->float('valor', 11, 2);
            $table->float('objetivo', 11, 2);
            $table->date('data_fim');
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
        Schema::dropIfExists('vaquinhas');
    }
}
