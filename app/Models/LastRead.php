<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LastRead extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'surah_id',
        'ayah_id',
    ];

    protected $casts = [
        'user_id' => 'integer',
        'surah_id' => 'integer',
        'ayah_id' => 'integer',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function surah(): BelongsTo
    {
        return $this->belongsTo(Surah::class);
    }

    public function ayah(): BelongsTo
    {
        return $this->belongsTo(Ayah::class);
    }
}

