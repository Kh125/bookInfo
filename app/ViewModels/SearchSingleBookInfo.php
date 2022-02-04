<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;

class SearchSingleBookInfo extends ViewModel
{
    public $singleBook;

    public function __construct($singleBook)
    {
        $this->singleBook = $singleBook;
    }

    public function book(){
        if(isset($this->singleBook['volumeInfo']['imageLinks'])){
            $imageLink = $this->singleBook['volumeInfo']['imageLinks']['thumbnail'];
        }else{
            $imageLink = '';
        }
        return collect($this->singleBook)->merge([
            // 'imageLink'=> $imageLink ? $imageLink : 'https://ui-avatars.com/api/?size=500&name='. $this->singleBook['volumeInfo']['title'],
            'imageLink'=>'https://ui-avatars.com/api/?size=500&name='. $this->singleBook['volumeInfo']['title'],
            'name'=> $this->singleBook['volumeInfo']['title'],
            'categories'=> isset($this->singleBook['volumeInfo']['categories']) ? $this->singleBook['volumeInfo']['categories'] : 'Unknown Category',
            'averageRating'=> isset($this->singleBook['volumeInfo']['averageRating']) ? $this->singleBook['volumeInfo']['averageRating'] : 'N/A',
            'description'=> isset($this->singleBook['volumeInfo']['description']) ? $this->singleBook['volumeInfo']['description'] : 'No Data for description',
            'length'=> isset($this->singleBook['volumeInfo']['pageCount']) ? $this->singleBook['volumeInfo']['pageCount'] : 'Unknown',
            'language'=> isset($this->singleBook['volumeInfo']['language']) ? $this->singleBook['volumeInfo']['language'] : 'Unknown',
            'authors'=> isset($this->singleBook['volumeInfo']['authors']) ? $this->singleBook['volumeInfo']['authors'] : ['Unknown'],
            'publisher'=> isset($this->singleBook['volumeInfo']['publisher']) ? $this->singleBook['volumeInfo']['publisher'] : 'Unknown',
            'publishedDate'=> isset($this->singleBook['volumeInfo']['publishedDate']) ? $this->singleBook['volumeInfo']['publishedDate'] : 'Unknown',
            'isbn10'=> isset($this->singleBook['volumeInfo']['industryIdentifiers'][0]) ? $this->singleBook['volumeInfo']['industryIdentifiers'][0]['identifier'] : 'Not Found',
            'isbn13'=> isset($this->singleBook['volumeInfo']['industryIdentifiers'][1]) ? $this->singleBook['volumeInfo']['industryIdentifiers'][1]['identifier'] : 'Not Found',
        ])->only(
            'imageLink', 'name', 'categories', 'averageRating', 'description', 'length', 'language', 'authors', 'publisher', 'publishedDate', 'isbn10', 'isbn13', 'publisher'
        );
    }
}
