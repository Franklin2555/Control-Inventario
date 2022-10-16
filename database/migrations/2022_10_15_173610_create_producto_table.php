<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('producto');
            $table->string('tiempo');
            $table->double('precio',8,2);
            $table->Integer('categoria_id')->unsigned();
            $table->foreign('categoria_id')->references('id')->on('categoria')->onDelete("cascade");
            $table->Integer('inventario_id')->unsigned();
            $table->foreign('inventario_id')->references('id')->on('inventario')->onDelete("cascade");
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
        Schema::dropIfExists('producto');
    }
}
