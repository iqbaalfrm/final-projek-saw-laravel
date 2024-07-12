<?php

use App\Models\Alternatif;
use App\Models\Kriteria;
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
        Schema::create('tb_nilai', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kriteria_id')->constrained('tb_kriteria', 'id')->cascadeOnDelete();
            $table->foreignId('alternatif_id')->constrained('tb_alternatif', 'id')->cascadeOnDelete();
            $table->double('nilai', 16);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_nilai');
    }
};