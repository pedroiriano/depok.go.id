<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Infografis extends Model
{
    protected $table = 'infografis';

    public function opd()
    {
        return $this->hasOne(OPD::class, 'id', 'sumber');
    }
}
