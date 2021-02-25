<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCochesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coches', function (Blueprint $table) {
            $table->id();
            $table->string('modelo')->unique();
            $table->string('nombre');
            $table->foreignId('marca_id')
                ->references('id')
                ->on('marcas')
                ->onUpdate('cascade')
                ->onDelete('cascade');
                $table->foreignId('carroceria_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('combustible');
            $table->string('cambio');
            $table->integer('potencia');
            $table->string('precio');
            $table->integer('plazas');
            $table->string('foto')->default('/img/fotosCoches/default.jpg');
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
        Schema::dropIfExists('coches');
    }
}
