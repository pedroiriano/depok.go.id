<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $table = 'kecamatan';
    
    public function kel()
    {
        return $this->hasMany('App\Kelurahan', 'kecamatan_id','id');
    }
}
