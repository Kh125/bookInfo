<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;

class HomeViewModel extends ViewModel
{
    public $latestBooks;
    public $popularBooks;
    public function __construct($latestBooks, $popularBooks)
    {
        $this->latestBooks = $latestBooks;
        $this->popularBooks = $popularBooks;
    }

    public function latestBooks(){
        return collect($this->latestBooks)->map(function($book){
            return collect($book)->merge([
                'bookImg'=> 'https://ui-avatars.com/api/?size=235&name='. $book['name'],
            ]);
        });
    }

    public function popularBooks(){
        return collect($this->popularBooks)->map(function($book){
            return collect($book)->merge([
                'bookImg'=> 'https://ui-avatars.com/api/?size=235&name='. $book['name'],
            ]);
        });
    }
}
