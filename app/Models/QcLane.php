<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QcLane extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    // public static $rules = [
    //     'kode_vin' => 'required|unique:qc_lanes.kode_vin'
    // ];

    public function qcin()
    {
        return $this->belongsTo(QcIn::class);
    }

    public function rtrw()
    {
        return $this->belongsTo(RtRw::class);
    }
}
