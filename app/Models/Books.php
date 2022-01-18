<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id',
        'name',
        'description',
        'genres',
        'rating',
        'released_date',
        'book_id',
        'file_path',
    ];
}
