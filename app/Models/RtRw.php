<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RtRw extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function qclane()
    {
        return $this->belongsTo(QcLane::class);
    }

    public function loadingzone()
    {
        return $this->belongsTo(LoadingZone::class);
    }
}
