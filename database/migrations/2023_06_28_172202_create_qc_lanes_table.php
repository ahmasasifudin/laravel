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
            $table->string('kode_vin')->unique();
            $table->string('model');
            $table->string('tgl_install');
            $table->string('waktu_in');
            $table->text('keterangan_in');
            $table->string('wsd_code');
            $table->string('wsd_pic')->nullable();
            $table->string('fr_code');
            $table->string('fr_pic')->nullable();
            $table->string('fl_code');
            $table->string('fl_pic')->nullable();
            $table->string('rr_code');
            $table->string('rr_pic')->nullable();
            $table->string('rl_code');
            $table->string('rl_pic')->nullable();
            $table->string('qtrr_code');
            $table->string('qtrr_pic')->nullable();
            $table->string('qtrl_code');
            $table->string('qtrl_pic')->nullable();
            $table->string('bdr_code');
            $table->string('bdr_pic')->nullable();
            $table->string('pic')->nullable();
            $table->string('team_lane');
            $table->string('waktu_out')->nullable();
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
