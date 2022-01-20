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
        return $this->books;
    }    
}
