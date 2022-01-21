@extends('layouts.app')

@section('content')
    {{-- book-section --}}
    <div data-aos="fade-in" data-aos-duration="1000" id="book" class="text-left py-10 md:py-18 px-2 sm:px-12 text-lightcolor border-b border-lightcolor">
        <div class="mt-6 text-center ml-0 sm:ml-12 md:ml-0 sm:text-left">            
            <h2 class="uppercase text-xl font-bold">
                 Books
            </h2>
            <span class="pt-3 md:pt-8 font-regular text-darkcolor">
                All kinds of book sorted by released date.
            </span>
        </div>
        <div class="mx-auto sm:mx-0 mt-8 grid grid-wrap grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-3 sm:gap-8 lg:gap-12">
            @foreach($books as $book)
                <x-book-card :book="$book"/>                
            @endforeach
        </div>
    </div>
    {{-- book-section --}}
    
@endsection