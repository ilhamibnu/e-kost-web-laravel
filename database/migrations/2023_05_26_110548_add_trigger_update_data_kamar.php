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
        Schema::table('transactions', function (Blueprint $table) {

            DB::unprepared('
        CREATE TRIGGER update_data_kamar_status AFTER INSERT ON transactions
        FOR EACH ROW
        BEGIN
            UPDATE data_kamar SET status = 0 WHERE id = NEW.kamar_id;
        END
        ');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transactions', function (Blueprint $table) {
            DB::unprepared('DROP TRIGGER IF EXISTS update_data_kamar');
        });
    }
};
