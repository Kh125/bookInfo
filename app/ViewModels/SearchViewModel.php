<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;

class SearchViewModel extends ViewModel
{
    public $searchResults;
    public function __construct($searchResults)
    {
        $this->searchResults = $searchResults;
    }

    public function searchResults(){
        return collect($this->searchResults)->map(function($book){  
            // we use default photo for all users since i have no storage to store user uploaded photo in heroku.          
            // if(isset($book['volumeInfo']['imageLinks'])){
            //     $imageLink = $book['volumeInfo']["imageLinks"]['thumbnail'];
            // }else{
            //     $imageLink = '';
            // }
            return collect($book)->merge([                
                'id'=> $book['id'],
                'authors'=> isset($book['volumeInfo']['authors']) ? $book['volumeInfo']['authors'] : 'Unknown',
                'title'=> $book['volumeInfo']['title'],
                'publishedDate'=> $book['volumeInfo']['publishedDate'] ?? 'N/A',
                // we use default photo for all users since i have no storage to store user uploaded photo in heroku.
                // 'imageLink'=> $imageLink? $imageLink : 'https://ui-avatars.com/api/?size=235&name='. $book['volumeInfo']['title'],
                'imageLink'=>'https://ui-avatars.com/api/?size=235&name='. $book['volumeInfo']['title'],
            ])->only([
                'id', 'authors', 'title', 'publishedDate', 'imageLink'
            ]);
        });
    }

}
