<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoadingZone extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function rtrw()
    {
        return $this->belongsTo(RtRw::class);
    }
}
