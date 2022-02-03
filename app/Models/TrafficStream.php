<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrafficStream extends Model
{
    use HasFactory;

    protected $fillable = [
        'traffic_name',
        'traffic_ACD',
        'traffic_ASR',
        'traffic_status',
        'traffic_user',
        'traffic_isPaused',
        'traffic_isComplete',
        'traffic_start_time',
        'traffic_end_time',
        'traffic_type',
    ];
    public function GeneratedCalls()
    {
        return $this->hasMany(GeneratedCall::class);
    }
}
