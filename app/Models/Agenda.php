<?php

namespace App\Models;

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
