<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $table = 'kecamatan';
    
    public function kel()
    {
        return $this->hasMany(Kelurahan::class, 'kecamatan_id','id');
    }
}
