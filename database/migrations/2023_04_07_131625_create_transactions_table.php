<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascacadeOnDelete()->cascacadeOnUpdate();
            $table->foreignId('kamar_id')->references('id')->on('data_kamar')->constrained()->cascacadeOnDelete()->cascacadeOnUpdate();
            $table->string('nama_pemesan');
            $table->string('durasi_sewa');;
            $table->string('total_price');
            $table->date('tgl_sewa');
            // $table->enum('status', ['unpaid', 'paid', 'batal']);
            $table->string('status');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
