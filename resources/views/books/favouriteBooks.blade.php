@extends('layouts.app')

@section('content')
    {{-- fav-book-section --}}
    <div id="book" class="z-10 text-left py-10 md:py-18 px-2 sm:px-12 lg:pr-12 xl:pr-0 text-lightcolor border-b border-lightcolor">
        <div class="z-20 flex flex-row flex-wrap mt-10 mx-auto justify-center xl:justify-start">
            @foreach ($favBook as $book)
                <x-favourite-book-card :book="$book"/>            
            @endforeach
        </div>
    </div>    
    {{-- fav-book-section --}}
@endsection