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
        Schema::create('rt_rws', function (Blueprint $table) {
            $table->id();
            $table->string('kode_vin')->unique();
            $table->string('model');
            $table->string('tgl_install');
            $table->string('waktu_in');
            $table->string('wsd_rtrw');
            $table->string('fr_rtrw');
            $table->string('fl_rtrw');
            $table->string('rr_rtrw');
            $table->string('rl_rtrw');
            $table->string('qtrr_rtrw');
            $table->string('qtrl_rtrw');
            $table->string('bdr_rtrw');
            $table->string('pic');
            $table->string('team_rtrw');
            $table->string('waktu_out');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rt_rws');
    }
};
