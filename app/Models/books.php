<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\authors;


class books extends Model
{
    use HasFactory;
    public function author()
    {
        return $this->belongsTo(authors::class, 'fk_authorsid', 'id_authors');
    }
    public function type()
    {
        return $this->belongsTo(types::class, 'fk_typesid', 'id_types');
    }
}
