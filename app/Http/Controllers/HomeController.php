<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\ViewModels\HomeViewModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display books retrieved from db.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $latestBooks = Books::orderBy('released_date','desc')->get();
        $popularBooks = Books::orderBy('rating', 'desc')->get();
        $viewModel = new HomeViewModel($latestBooks, $popularBooks);
        return view('index', $viewModel);
    }
        
}
