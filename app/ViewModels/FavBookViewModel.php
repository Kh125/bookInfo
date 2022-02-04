<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;

class FavBookViewModel extends ViewModel
{
    public $favBook;
    public function __construct($favBook)
    {
        $this->favBook = $favBook;
    }

    public function favBook(){
        // return $this->favBook;
        return collect($this->favBook)->map(function($book){            
            return collect($book)->merge([
                'id'=> $book['id'],
                'name'=> $book['name'],
                'genres'=> $book['genres'],                 
                // 'img'=>$book['bookImg'] ? '/storage/bookCover/' . $book['bookImg'] : 'https://ui-avatars.com/api/?size=235&name='. $book['name'],
                'img'=>'https://ui-avatars.com/api/?size=235&name='. $book['name'],
            ])->only('id', 'name', 'genres', 'img');
        });
    }
}
