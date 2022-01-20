<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;

class BookViewModel extends ViewModel
{
    public $book;    
    public function __construct($book)
    {
        $this->book = $book;
    }

    public function book(){
        return $this->book;
    }
}
