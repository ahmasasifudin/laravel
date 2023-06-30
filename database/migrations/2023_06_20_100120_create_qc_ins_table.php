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
        Schema::create('qc_ins', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('kode_vin')->unique();
            $table->string('model');
            $table->string('waktu');
            $table->string('tgl_install');
            $table->string('unit');
            $table->text('keterangan');
            $table->string('pic');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qc_ins');
    }
};
