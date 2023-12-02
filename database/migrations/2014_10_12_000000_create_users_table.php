<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('username')->nullable();
            $table->string('email');
            $table->string('password');
            $table->string('alamat')->nullable();
            $table->string('foto')->nullable();
            $table->string('nik')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('bukti_kontrak')->nullable();
            $table->enum('statusUser', ['valid', 'unvalid', 'pending'])->default('pending');
            $table->string('slug')->nullable();
            $table->string('api_token')->nullable();
            $table->enum('role', ['admin', 'pemilik', 'pencari'])->default('pencari');
            $table->enum('kelamin', ['L', 'P']);
            $table->softDeletes();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
