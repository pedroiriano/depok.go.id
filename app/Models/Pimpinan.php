<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Pimpinan extends Model
{
    use HasFactory;

    protected $table = "pimpinan";

    public const STORAGE_PATH = 'public/uploads/pimpinan';

    protected $fillable = [
        'nama',
        'deskripsi',
        'image',
        'instagram',
        'twitter',
        'facebook',
    ];

    public function getImageUrlAttribute()
    {
        return asset(Storage::url($this->attributes['image']));
    }
}
