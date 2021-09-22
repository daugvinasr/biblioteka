<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\authors;


class books extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function authorIdToText()
    {
        return $this->belongsTo(authors::class, 'fk_authorsid', 'id_authors');
    }
    public function typeIdToText()
    {
        return $this->belongsTo(types::class, 'fk_typesid', 'id_types');
    }
}
