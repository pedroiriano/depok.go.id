<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
