<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;

class ApiBookViewModel extends ViewModel
{

    public $apiArray;
    public function __construct($apiArray)
    {
        $this->apiArray = $apiArray;
    }

    public function latestBooks(){
        return collect($this->apiArray[0])->map(function($book){
            return $this->bookFormat($book);
        });
    }


    public function techBooks(){
        return collect($this->apiArray[1])->map(function($book){
            return $this->bookFormat($book);
        });
    }

    public function comedyBooks(){
        return collect($this->apiArray[2])->map(function($book){
            return $this->bookFormat($book);
        });
    }

    public function scienceBooks(){
        return collect($this->apiArray[3])->map(function($book){
            return $this->bookFormat($book);
        });
    }

    public function entertainmentBooks(){
        return collect($this->apiArray[4])->map(function($book){
            return $this->bookFormat($book);
        });
    }

    public function healthBooks(){
        return collect($this->apiArray[5])->map(function($book){
            return $this->bookFormat($book);
        });
    }

    public function bookFormat($book){        
        if(isset($book['volumeInfo']['imageLinks'])){
            $imageLink = $book['volumeInfo']["imageLinks"]['thumbnail'];
        }else{
            $imageLink = '';
        }
        return collect($book)->merge([
            'id'=> $book['id'],
            'authors'=> isset($book['volumeInfo']['authors']) ? $book['volumeInfo']['authors'] : 'Unknown',
            'title'=> $book['volumeInfo']['title'],
            'publishedDate'=> $book['volumeInfo']['publishedDate'] ?? 'N/A',            
            'imageLink'=> $imageLink? $imageLink : 'https://ui-avatars.com/api/?size=235&name='. $book['volumeInfo']['title'],            
        ])->only('id', 'authors', 'title', 'publishedDate', 'imageLink');
    }
}
