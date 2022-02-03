<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'description',
        'genres',
        'rating',
        'released_date',
        'file_path',
        'author',
        'ISBN13',
        'ISBN10',
        'producerName',
        'bookImg',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function favBooks(){
        return $this->belongsToMany(FavouriteBooks::class);
    }

}
