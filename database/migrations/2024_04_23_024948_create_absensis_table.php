<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('absensi', function (Blueprint $table) {
            $table->id();
            $table->string('namaKaryawan');
            $table->date('tanggalMasuk')->default(DB::raw('CURRENT_DATE'));
            $table->timestamp('waktuMasuk');
            $table->enum('status', ['masuk', 'sakit', 'cuti'])->default('masuk');
            $table->time('waktuKeluar')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absensi');
    }
};
