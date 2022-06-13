<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatapengirimanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datapengiriman', function (Blueprint $table) {
            $table->id();
            $table->enum('tipebarang', ['makanan', 'minuman', 'pakaian']);
            $table->string('beratbarang');
            $table->string('idorder');
            $table->string('idbarang');
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
        Schema::dropIfExists('datapengiriman');
    }
}
