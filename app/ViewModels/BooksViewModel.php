<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;

class BooksViewModel extends ViewModel
{
    public $books;    
    public function __construct($books)
    {
        $this->books = $books;
    }

    public function books(){
        return collect($this->books)->map(function($book){
            return collect($book)->merge([
                // we use default photo for all users since i have no storage to store user uploaded photo in heroku.
                // 'bookImg'=>$book['bookImg'] ? '/storage/bookCover/' . $book['bookImg'] : 'https://ui-avatars.com/api/?size=235&name='. $book['name'],
                'bookImg'=> 'https://ui-avatars.com/api/?size=235&name='. $book['name'],
            ]);
        });
    }    
}
