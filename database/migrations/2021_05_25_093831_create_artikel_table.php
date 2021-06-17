<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateArtikelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikel', function (Blueprint $table) {
           $table->bigIncrements('id');
           $table->string('nama_depan');
           $table->string('nama_belakang');
           $table->string('alamat');
           $table->string('pekerjaan');
           $table->string('riwayat');
           $table->string('lokasi');
           $table->string('tanggal');
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
        Schema::dropIfExists('artikel');
    }
}