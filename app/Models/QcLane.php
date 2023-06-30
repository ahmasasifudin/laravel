<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QcLane extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function qcin()
    {
        return $this->belongsTo(QcIn::class);
    }
}
