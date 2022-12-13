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
            $table->foreignId('client_id')->constrained();
            $table->foreignId('asset_id')->constrained();
            $table->foreignId('admin_id')->constrained()->default(NULL)->nullable();
            $table->date('tanggal_pengajuan');
            $table->date('mulai_pakai');
            $table->integer('durasi');
            $table->text('surat');
            $table->integer('jumlah');
            $table->string('catatan')->nullable();
            $table->date('tanggal_keputusan')->nullable();
            $table->integer('keputusan')->nullable();
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
        //
    }
};
