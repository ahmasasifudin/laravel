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
        Schema::create('loading_zones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kode_vin')->unique();
            $table->string('model');
            $table->string('tgl_install');
            $table->string('waktu_in');
            $table->string('wsd_lz');
            $table->string('fr_lz');
            $table->string('fl_lz');
            $table->string('rr_lz');
            $table->string('rl_lz');
            $table->string('qtrr_lz');
            $table->string('qtrl_lz');
            $table->string('bdr_lz');
            $table->string('pic');
            $table->string('team');
            $table->string('waktu_out');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loading_zones');
    }
};
