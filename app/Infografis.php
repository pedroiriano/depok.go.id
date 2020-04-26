<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Infografis extends Model
{
    protected $table = 'infografis';

    public function opd()
    {
        return $this->hasOne('App\OPD', 'id', 'sumber');
    }
}
