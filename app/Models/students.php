<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function borrows()
    {
        return $this->hasOne(borrows::class);
    }

}
