<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Surah extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $keyType = 'int';

    protected $fillable = [
        'id',
        'nama_arab',
        'nama_latin',
        'arti',
        'jumlah_ayat',
        'tempat_turun',
        'deskripsi',
        'audio_url',
    ];

    protected $casts = [
        'id' => 'integer',
        'jumlah_ayat' => 'integer',
    ];

    public function ayahs(): HasMany
    {
        return $this->hasMany(Ayah::class)->orderBy('nomor_ayat');
    }

    public function bookmarks(): MorphMany
    {
        return $this->morphMany(Bookmark::class, 'bookmarkable');
    }
}

