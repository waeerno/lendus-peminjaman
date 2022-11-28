<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjamans', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('asset_id');
            $table->date('tanggal_pengajuan');
            $table->date('mulai_pakai');
            $table->integer('durasi');
            $table->text('surat');
            $table->string('catatan');
            $table->integer('keputusan');
            $table->string('admin_id');
            $table->$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjamans');
    }
};
