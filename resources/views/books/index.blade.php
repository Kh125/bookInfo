@extends('layouts.app')

@section('content')
    {{-- book-section --}}
    <div id="popular-book" class="text-left py-10 md:py-18 px-12 bg-gradient-to-r from-primarycolor to-secondarycolor text-lightcolor border-b border-lightcolor" data-aos="fade-in" data-aos-duration="3000">
        <div class="text-center md:text-left">            
            <h2 class="uppercase text-xl font-bold">
                 Books
            </h2>
            <span class="pt-3 md:pt-8 font-regular text-darkcolor">
                All kinds of book sorted by released date.
            </span>
        </div>
        <div class="mt-16 grid grid-wrap grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-8 lg:gap-12">
            @foreach($books as $book)
                <x-book-card :book="$book"/>                
            @endforeach
        </div>
    </div>
    {{-- book-section --}}
    
@endsection