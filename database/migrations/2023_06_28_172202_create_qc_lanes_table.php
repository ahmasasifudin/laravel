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
        Schema::create('qc_lanes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kode_vin')->unique();
            $table->string('model');
            $table->string('tgl_install');
            $table->string('waktu_in');
            $table->text('keterangan_in');
            $table->string('wsd_code');
            $table->string('wsd_pic');
            $table->string('fr_code');
            $table->string('fr_pic');
            $table->string('fl_code');
            $table->string('fl_pic');
            $table->string('rr_code');
            $table->string('rr_pic');
            $table->string('rl_code');
            $table->string('rl_pic');
            $table->string('qtrr_code');
            $table->string('qtrr_pic');
            $table->string('qtrl_code');
            $table->string('qtrl_pic');
            $table->string('bdr_code');
            $table->string('bdr_pic');
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
        Schema::dropIfExists('qc_lanes');
    }
};
