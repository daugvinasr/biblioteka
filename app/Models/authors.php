<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class authors extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function books()
    {
        return $this->hasOne(books::class);
    }
}
