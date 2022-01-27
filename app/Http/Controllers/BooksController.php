<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\FavouriteBooks;
use App\ViewModels\ApiBookViewModel;
use App\ViewModels\BooksViewModel;
use App\ViewModels\BookViewModel;
use App\ViewModels\FavBookViewModel;
use App\ViewModels\SearchSingleBookInfo;
use App\ViewModels\SearchViewModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class BooksController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth'])->only(['index', 'searchBooks', 'apiIndex', 'authorBooks', 'showFavourite', 'favToggle', 'searchBooks']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Books::orderBy('released_date','desc')->get();
        $viewModel = new BooksViewModel($books);
        return view('books.index', $viewModel);
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(is_numeric($id)){            
            $book = Books::find($id);  
            $fav = new FavouriteBooks;            
            $viewModel = new BookViewModel($book);    
            return view('books.show', $viewModel, [
                'fav'=> $fav,
            ]);        
        }
        else{
            $searchBook = Http::get('https://www.googleapis.com/books/v1/volumes/' . $id)
            ->json();
            if(isset($searchBook['error'])){                
                return view('books.showSearchBookInfo', [
                    'exist'=>false,
                ]);           
            }else{
                $viewModel = new SearchSingleBookInfo($searchBook); 
                return view('books.showSearchBookInfo', $viewModel, [
                    'exist'=>true,
                ]);           
            }         
            
        }            
    }


    /**
     * Display books from google api.
     *
     * @return \Illuminate\Http\Response
     */
    public function apiIndex()
    {
        $latest = $this->callBookApi('2022&orderBy=newest')['items'];
        $tech = $this->callBookApi('technology&orderBy=newest')['items'];
        $comedy = $this->callBookApi('funny&orderBy=relevance')['items'];
        $science = $this->callBookApi('subject:science&orderBy=relevance')['items'];
        $entertainment = $this->callBookApi('subject:novels&orderBy=relevance')['items'];
        $health = $this->callBookApi('subject:health&orderBy=relevance')['items'];
        $apiArray = [
            $latest, $tech, $comedy, $science, $entertainment, $health
        ];      
        $viewModel = new ApiBookViewModel($apiArray);
        return view('apiIndex', $viewModel);
    }
    
    // api format to use multiple times
    private function callBookApi($subject, $index = 0, $maxResult = 5){
        $getApi = Http::get('https://www.googleapis.com/books/v1/volumes?q=' . $subject . '&startIndex=' . $index . '&maxResults=' . $maxResult)
        ->json();
        return $getApi;
    }
    

    /**
     * Display books of the authors searched by author name
     *
     * @return \Illuminate\Http\Response
     */
    public function authorBooks(Request $request, $page = 1)
    {        
        $maxResult = 20;
        $startIndex = $maxResult * $page - $maxResult;
        $authorBooks = $this->callBookApi('inauthor:' . $request->author, $startIndex, $maxResult); 
        if(isset($authorBooks['items'])){
            $viewModel = new SearchViewModel($authorBooks['items']);
            return view('books.searchAuthorResult', $viewModel, [
                'searchQuery'=> $request->author,
                'result'=>true
            ]);        
        }else{
            return view('books.searchAuthorResult', [
                'searchQuery'=> $request->author,
                'result'=> false
            ]);
        }
    }

    /**
     * Display user's favourite books.
     *
     * @return \Illuminate\Http\Response
     */
    public function showFavourite()
    { 
        $favBook = Auth::user()->fav;
        $viewModel = new FavBookViewModel($favBook);
        return view('books.favouriteBooks', $viewModel);
    }
    

    /**
     * add to or remove from favourite
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function favToggle(Request $request, $id)
    {
        $fav = new FavouriteBooks;
        $checkFav = $fav->checkFav($id);
        if($checkFav){
            FavouriteBooks::where('user_id', Auth::user()->id)->where('book_id', $id)->delete();
        }
        else{
            FavouriteBooks::updateOrCreate([
                'user_id' => auth()->user()->id,
                'book_id' => $id,
            ]);
        }        
        return back();
    }


    /**
     * Display the search books from all places.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function searchBooks(Request $request, $page = 1)
    {              
        
        $request->validate([
            'searchQuery'=>'required'
        ]);
        $maxResults = 30;
        $startIndex = $maxResults * $page - $maxResults;
        $searchResults = Http::get('https://www.googleapis.com/books/v1/volumes?q=' . $request->searchQuery . '&key=' . env('BOOKDB_TOKEN') . '&startIndex=' . $startIndex .'&maxResults=' . $maxResults . '&orderBy=newest')
        ->json();
        if(isset($searchResults['items'])){
            $viewModel = new SearchViewModel($searchResults['items']);
            return view('books.searchResult', $viewModel, [
                'searchQuery'=> $request->searchQuery,
                'result'=>true
            ]);        
        }else{
            return view('books.searchResult', [
                'searchQuery'=> $request->searchQuery,
                'result'=> false
            ]);
        }
        
    }

    /**
     * Display user's uploaded books.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexUpload()
    {        
        return view('community.uploadBooks');
    }

    /**
     * The form for uploading new books.
     *
     * @return \Illuminate\Http\Response
     */
    public function processUpload()
    {
        return view('community.uploadBooks');
    }

}
