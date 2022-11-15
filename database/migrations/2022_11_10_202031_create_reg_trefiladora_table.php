<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegTrefiladoraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reg_trefiladora', function (Blueprint $table) {
            $table->id();
            $table->integer('nalambron')->nullable();
            $table->timestamp('fecha');
            $table->unsignedBigInteger('id_producto')->nullable();
            $table->integer('diametro')->nullable();
            $table->unsignedBigInteger('id_turno')->nullable();
            $table->unsignedBigInteger('id_operador')->nullable();
            $table->integer('horas')->nullable();
            $table->integer('kg')->nullable();
            $table->text('opservaciones')->nullable();
            
            $table->foreign('id_producto', 'reg_trefiladora_ibfk_1')->references('id')->on('producto');
            $table->foreign('id_turno', 'reg_trefiladora_ibfk_2')->references('id')->on('turno');
            $table->foreign('id_operador', 'reg_trefiladora_ibfk_3')->references('id')->on('operador');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reg_trefiladora');
    }
}
