<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengirimanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengiriman', function (Blueprint $table) {
            $table->id();
            $table->date('tanggalorder');
            $table->enum('statuspengiriman', ['paket diambil kurir', 'paket sedang dalam perjalanan', 'paket telah sampai ditujuan pengirim']);
            $table->string('alamatpenerima');
            $table->string('namapenerima');
            $table->char('notelponpenerima');
            $table->string('idcustomer');
            $table->string('idpegawai');
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
        Schema::dropIfExists('pengiriman');
    }
}
