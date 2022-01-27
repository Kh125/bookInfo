<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class FavouriteBooks extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'book_id'
    ];

    public $fav;

    public function checkFav($id){
        return FavouriteBooks::where('user_id', Auth::user()->id)->where('book_id', '=', $id)->count() ? true : false;
    }



}
