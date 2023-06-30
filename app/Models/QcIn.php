<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QcIn extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function qclane()
    {
        return $this->belongsTo(QcLane::class);
    }
}
