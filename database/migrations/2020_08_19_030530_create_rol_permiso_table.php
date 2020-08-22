<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolPermisoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rol_permiso', function (Blueprint $table) {
            $table->id();
            $table->integer('id_rol');
            $table->integer('id_permiso');
            $table->unique(['id_rol', 'id_permiso']);
            $table->foreign('id_rol')->references('id')->on('rol')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_permiso')->references('id')->on('permiso')
                ->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('rol_permiso');
    }
}
