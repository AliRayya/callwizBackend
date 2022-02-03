<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneratedCall extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function TrafficStream()
    {
        return $this->belongsTo(TrafficStream::class);
    }
}
