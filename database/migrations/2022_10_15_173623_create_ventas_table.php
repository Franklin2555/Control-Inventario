<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->Increments('id');
                $table->string('producto');
                $table->string('cantidad');
                $table->double('precio',8,2);
                $table->string('total_venta');
                $table->date('fecha_venta');
                $table->Integer('producto_id')->unsigned();
                $table->foreign('producto_id')->references('id')->on('producto')->onDelete("cascade");
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
        Schema::dropIfExists('ventas');
    }
}
