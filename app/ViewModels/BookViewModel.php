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
        $val = json_decode($this->book['file_path']);          
        return collect($this->book)->merge([
            'file_path'=>$val,
            'released_date'=>$this->book['released_date']  ?? 'Unknown',
            'ISBN13'=>$this->book['ISBN13']  ?? 'Unknown',
            'ISBN10'=>$this->book['ISBN10']  ?? 'Unknown',
            'producerName'=>$this->book['producerName']  ?? 'Unknown',
            'rating'=>$this->book['rating']  ?? 'N/A',
            'genres'=>$this->book['genres']  ?? 'Unknown',
            'bookImg'=>$this->book['bookImg'] ? '/storage/bookCover/' . $this->book['bookImg'] : 'https://ui-avatars.com/api/?size=235&name='. $this->book['name'],
        ]);
    }
}
