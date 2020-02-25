<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = 'sliders';

    public function opd()
    {
        return $this->hasOne('App\OPD', 'id', 'sumber');
    }
}
