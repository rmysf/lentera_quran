<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'ukuran_font_arab',
        'tampilkan_latin',
        'tampilkan_terjemahan',
        'tema',
    ];

    protected $casts = [
        'ukuran_font_arab' => 'integer',
        'tampilkan_latin' => 'boolean',
        'tampilkan_terjemahan' => 'boolean',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

