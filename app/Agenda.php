<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    //
    protected $guarded = [];
    protected $table = 'agendas';

    protected $fillable = [
        'nama', 'tanggal', 'imageName', 'sumber', 'tempat',
    ];

}
