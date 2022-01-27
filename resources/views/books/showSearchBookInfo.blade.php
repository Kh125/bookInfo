@extends('layouts.app')


@if (!$exist)
@section('content')    
<div class="my-30 text-center">
    <div class="mt-56">
        <h2 class="text-center text-6xl text-slate-200 font-bold">
            404 | Not Found
        </h2>
    </div>
</div>
@endsection
@else    
@section('content')
    {{-- latest-book-section --}}
    <div id="popular-book" class="px-8 py-20 bg-gradient-to-r from-primarycolor to-secondarycolor text-lightcolor border-b border-lightcolor">        
        <div class="text-center md:text-left">        
            <div class="flex flex-col md:flex-row">
                <div class="sm:mx-0 md:mx-0 w-[18rem] h-[25rem] md:mr-16 mb-16 lg:mb-0" data-aos="fade-right" data-aos-duration="700">
                    <img src="{{ $book['imageLink'] }}" alt="img-cover" class="rounded-lg shadow-lg object-cover w-full h-full">                                                                                
                </div>
                <div class="mt-5 md:mt-0 md:basis-3/5 lg:basis-4/6 pt-5 md:pt-0" data-aos="fade-in" data-aos-duration="3000">
                    <h2 class="text-4xl font-bold uppercase text-left">
                        {{ $book['name'] }}
                    </h2>
                    <div class="flex flex-wrap items-center opacity-70 text-sm font-semibold">
                        <span class="mr-1">
                            <svg class="fill-current text-orange-400 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                        </span>
                        <span class="ml-1">
                            @if ($book['averageRating'] == 'N/A')
                                {{ $book['averageRating'] }}
                            @else
                                {{ $book['averageRating'] }}/5
                            @endif
                        </span>
                        <span class="mx-2">|</span>
                        <span class="ml-1">{{ $book['publishedDate']}}</span>                        
                        <span class="mx-2">|</span>
                        @foreach ($book['authors'] as $author)  
                        <form action="{{ route('author.books') }}" method="GET">
                            <input type="hidden" name="author" value="{{ $author }}">
                            <button class="text-sm hover:opacity-75">
                                {{ $author }}
                            </button>
                            @if (!$loop->last)
                                ,&nbsp;
                            @endif
                        </form>
                        @endforeach                                        
                                               
                    </div>
                    <p class="mt-5 text-left">
                        {{-- {{ $book['description'] }} --}}
                        {!! $book['description'] !!}
                    </p>
                    <h2 class="text-left mt-8 text-1xl font-bold" data-aos="fade-in" data-aos-duration="3000">
                        Book Details
                    </h2>
                    <div class="pb-5 mt-3 grid grid-cols-2 lg:grid-cols-2 gap-5 text-left"  data-aos="fade-in" data-aos-duration="1500">                        
                                                                   
                        <div class="book-info mr-8">                                                        
                            <h2 class="opacity-75">
                                Publisher
                            </h2>
                            <p><a href="#" class="text-lg text-semibold hover:opacity-75">{{ $book['publisher'] }}</a></p>
                        </div>

                        <div class="book-info mr-8">                                                        
                            <h2 class="opacity-75">
                                Language
                            </h2>
                            <p><a class="text-lg text-semibold">{{ $book['language'] }}</a></p>
                        </div>

                        <div class="book-info mr-8">                                                        
                            <h2 class="opacity-75">
                                Category
                            </h2>
                            <p>                                
                                @if (is_array($book['categories']))
                                    @foreach ($book['categories'] as $categorie)
                                        @if ($loop->index < 2)
                                        <a href="#" class="text-lg text-semibold hover:opacity-75">
                                            {{ $categorie }}
                                        </a>
                                            @if (!$loop->index == 1)
                                            <b>,</b>&nbsp;
                                            @endif     
                                        @else
                                            @break
                                        @endif      
                                    @endforeach
                                @else
                                    <a class="text-lg text-semibold">
                                        {{ $book['categories'] }}
                                    </a>                                    
                                @endif
                            </p>
                        </div>

                        <div class="book-info mr-8">                                                        
                            <h2 class="opacity-75">
                                Page Count
                            </h2>
                            <p><a class="text-lg text-semibold">{{ $book['length'] }}</a></p>
                        </div>
                                               
                        <div class="book-info mr-8">                                                        
                            <h2 class="opacity-75">
                                ISBN-13                                
                            </h2>
                            <p><a class="text-lg text-semibold">{{ $book['isbn13'] }}</a></p>
                        </div>
                        <div class="book-info mr-8">                                                        
                            <h2 class="opacity-75">
                                ISBN-10
                            </h2>
                            <p><a class="text-lg text-semibold">{{ $book['isbn10'] }}</a></p>
                        </div>                                               
                    </div>                    
                </div>
            </div>
        </div>
        
    </div>
    {{-- latest-book-section --}}
     
@endsection
@endif

