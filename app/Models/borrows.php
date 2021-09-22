<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class borrows extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function studentIdToText()
    {
        return $this->belongsTo(students::class, 'fk_studentsid', 'id_students');
    }
    public function bookIdToText()
    {
        return $this->belongsTo(books::class, 'fk_booksid', 'id_books');
    }

}
