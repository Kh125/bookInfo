<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;

class ProfileViewModel extends ViewModel
{
    private $books;
    public function __construct($books)
    {
        $this->books = $books;
    }

    public function books(){
        return collect($this->books)->map(function($book){
            return collect($book)->merge([
                // 'bookImg'=>$book['bookImg'] ? '/storage/bookCover/' . $book['bookImg'] : 'https://ui-avatars.com/api/?size=235&name='. $book['name'],
                'bookImg'=>'https://ui-avatars.com/api/?size=235&name='. $book['name'],
            ]);
        });
    }
}
