<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exame extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'data',
        'nome',
        'tipo',
        'local',
        'status',
        'resultado'
    ];

    protected $casts = [
        'data' => 'date'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
