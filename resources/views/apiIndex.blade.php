@extends('layouts.app')

@section('content')
    {{-- latest-book-section --}}
    <div data-aos="fade-in" data-aos-duration="2000" id="book" class="z-40 text-left py-10 md:py-18 px-2 sm:px-12 text-lightcolor border-b border-lightcolor">
        <div class="mt-6 text-center ml-0 sm:ml-12 md:ml-0 sm:text-left">            
            <h2 class="uppercase text-xl font-bold">
                Latest Released
            </h2>
            {{-- <span class="pt-3 md:pt-8 font-regular text-darkcolor">
                Latest released books for you
            </span> --}}
        </div>
        <div class="mx-auto sm:mx-0 mt-12 grid grid-wrap grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-3 sm:gap-8 lg:gap-12">
            @foreach($latestBooks as $book)
                <x-search-book-card :book="$book" />
            @endforeach
        </div>
    </div>
    {{-- latest-book-section --}}

    {{-- tech-book-section --}}
    <div data-aos="fade-in" data-aos-duration="2000" id="book" class="z-40 text-left py-10 md:py-18 px-2 sm:px-12 text-lightcolor border-b border-lightcolor">
        <div class="mt-6 text-center ml-0 sm:ml-12 md:ml-0 sm:text-left">            
            <h2 class="uppercase text-xl font-bold">
                Technology
            </h2>
            {{-- <span class="pt-3 md:pt-8 font-regular text-darkcolor">
                Newest technology books
            </span> --}}
        </div>
        <div class="mx-auto sm:mx-0 mt-12 grid grid-wrap grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-3 sm:gap-8 lg:gap-12">
            @foreach($techBooks as $book)
                <x-search-book-card :book="$book" />
            @endforeach
        </div>
    </div>
    {{-- tech-book-section --}}

    {{-- love-book-section --}}
    <div data-aos="fade-in" data-aos-duration="2000" id="book" class="z-40 text-left py-10 md:py-18 px-2 sm:px-12 text-lightcolor border-b border-lightcolor">
        <div class="mt-6 text-center ml-0 sm:ml-12 md:ml-0 sm:text-left">            
            <h2 class="uppercase text-xl font-bold">
                Comedy
            </h2>
            {{-- <span class="pt-3 md:pt-8 font-regular text-darkcolor">
                All kinds of book sorted by released date.
            </span> --}}
        </div>
        <div class="mx-auto sm:mx-0 mt-12 grid grid-wrap grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-3 sm:gap-8 lg:gap-12">
            @foreach($comedyBooks as $book)
                <x-search-book-card :book="$book" />
            @endforeach
        </div>
    </div>
    {{-- love-book-section --}}
    {{-- love-book-section --}}
    <div data-aos="fade-in" data-aos-duration="2000" id="book" class="z-40 text-left py-10 md:py-18 px-2 sm:px-12 text-lightcolor border-b border-lightcolor">
        <div class="mt-6 text-center ml-0 sm:ml-12 md:ml-0 sm:text-left">            
            <h2 class="uppercase text-xl font-bold">
                Science
            </h2>
            {{-- <span class="pt-3 md:pt-8 font-regular text-darkcolor">
                All kinds of book sorted by released date.
            </span> --}}
        </div>
        <div class="mx-auto sm:mx-0 mt-12 grid grid-wrap grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-3 sm:gap-8 lg:gap-12">
            @foreach($scienceBooks as $book)
                <x-search-book-card :book="$book" />
            @endforeach
        </div>
    </div>
    {{-- love-book-section --}}
    {{-- love-book-section --}}
    <div data-aos="fade-in" data-aos-duration="2000" id="book" class="z-40 text-left py-10 md:py-18 px-2 sm:px-12 text-lightcolor border-b border-lightcolor">
        <div class="mt-6 text-center ml-0 sm:ml-12 md:ml-0 sm:text-left">            
            <h2 class="uppercase text-xl font-bold">
                Health
            </h2>
            {{-- <span class="pt-3 md:pt-8 font-regular text-darkcolor">
                All kinds of book sorted by released date.
            </span> --}}
        </div>
        <div class="mx-auto sm:mx-0 mt-12 grid grid-wrap grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-3 sm:gap-8 lg:gap-12">
            @foreach($healthBooks as $book)
                <x-search-book-card :book="$book" />
            @endforeach
        </div>
    </div>
    {{-- love-book-section --}}
    {{-- horror-book-section --}}
    <div data-aos="fade-in" data-aos-duration="2000" id="book" class="z-40 text-left py-10 md:py-18 px-2 sm:px-12 text-lightcolor border-b border-lightcolor">
        <div class="mt-6 text-center ml-0 sm:ml-12 md:ml-0 sm:text-left">            
            <h2 class="uppercase text-xl font-bold">
                Entertainment
            </h2>
            {{-- <span class="pt-3 md:pt-8 font-regular text-darkcolor">
                All kinds of book sorted by released date.
            </span> --}}
        </div>
        <div class="mx-auto sm:mx-0 mt-12 grid grid-wrap grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-3 sm:gap-8 lg:gap-12">
            @foreach($entertainmentBooks as $book)
                <x-search-book-card :book="$book" />
            @endforeach
        </div>
    </div>
    {{-- horror-book-section --}}
    
@endsection