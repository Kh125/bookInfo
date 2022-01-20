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
        return $this->latestBooks;
    }

    public function popularBooks(){
        return $this->popularBooks;
    }
}
