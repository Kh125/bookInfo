@extends('layouts.app')

@if ($book == null)
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
                    <img src="{{ $book['bookImg'] }}" alt="img-cover" class="rounded-lg shadow-lg object-cover w-full h-full">                                                                               
                </div>
                <div class="mt-5 md:mt-0 md:basis-3/5 lg:basis-4/6 pt-5 md:pt-0" data-aos="fade-in" data-aos-duration="3000">
                    <div class="flex items-center justify-between">
                        <h2 class="text-4xl font-bold uppercase text-left">
                            {{ $book['name'] }}
                        </h2>
                        @auth                                                    
                        <form action="{{ route('fav.toggle', $book['id']) }}" method="GET">
                            @csrf
                            <button type="submit" class="mr-20">
                                @if (!$fav->checkFav($book['id']))
                                    <svg class="w-7 h-7 hover:scale-105 transition duration-300" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        viewBox="0 0 455 455" style="enable-background:new 0 0 455 455;" xml:space="preserve">
                                        <path d="M326.632,10.346c-38.733,0-74.991,17.537-99.132,46.92c-24.141-29.384-60.398-46.92-99.132-46.92
                                        C57.586,10.346,0,67.931,0,138.714c0,55.426,33.05,119.535,98.23,190.546c50.161,54.647,104.728,96.959,120.257,108.626l9.01,6.769
                                        l9.01-6.768c15.529-11.667,70.098-53.978,120.26-108.625C421.949,258.251,455,194.141,455,138.714
                                        C455,67.931,397.414,10.346,326.632,10.346z M334.666,308.974c-41.259,44.948-85.648,81.283-107.169,98.029
                                        c-21.52-16.746-65.907-53.082-107.166-98.03C61.236,244.592,30,185.717,30,138.714c0-54.24,44.128-98.368,98.368-98.368
                                        c35.694,0,68.652,19.454,86.013,50.771l13.119,23.666l13.119-23.666c17.36-31.316,50.318-50.771,86.013-50.771
                                        c54.24,0,98.368,44.127,98.368,98.368C425,185.719,393.763,244.594,334.666,308.974z"/>
                                    </svg>
                                @else
                                    <svg class="w-7 h-7 hover:scale-105 transition duration-300" fill="red" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        viewBox="0 0 455 455" style="enable-background:new 0 0 455 455;" xml:space="preserve">
                                        <path d="M326.632,10.346c-38.733,0-74.991,17.537-99.132,46.92c-24.141-29.383-60.399-46.92-99.132-46.92
                                        C57.586,10.346,0,67.931,0,138.714c0,55.426,33.049,119.535,98.23,190.546c50.162,54.649,104.729,96.96,120.257,108.626l9.01,6.769
                                        l9.009-6.768c15.53-11.667,70.099-53.979,120.26-108.625C421.95,258.251,455,194.141,455,138.714
                                        C455,67.931,397.414,10.346,326.632,10.346z"/>
                                    </svg>
                                @endif
                            </button>
                        </form>
                        @endauth
                    </div>
                    <div class="flex flex-wrap items-center opacity-80">
                        <span class="mt-1">
                            <svg class="fill-current text-orange-400 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                        </span>
                        <span class="ml-1">{{ $book['rating']}}</span>                        
                        <span class="mx-2">|</span>
                        <span>
                            {{ $book['genres'] }} 
                        </span>
                    </div>
                    <p class="mt-5 text-left">
                        {{ $book['description'] }}
                    </p>
                    <h2 class="text-left mt-8 text-1xl font-bold" data-aos="fade-in" data-aos-duration="3000">
                        Book Details
                    </h2>
                    <div class="pb-5 border-b border-lightcolor mt-3 grid grid-cols-2 lg:grid-cols-2  gap-5 text-left"  data-aos="fade-in" data-aos-duration="1500">
                        <div class="book-info mr-8">                                                        
                            <h2 class="opacity-75">
                                Author
                            </h2>
                            <p><a href="#" class="text-lg text-semibold hover:opacity-75">{{ $book['author'] }}</a></p>
                        </div>
                        <div class="book-info mr-8">                                                        
                            <h2 class="opacity-75">
                                Producer
                            </h2>
                            <p><a href="#" class="text-lg text-semibold hover:opacity-75">{{ $book['producerName'] }}</a></p>
                        </div>
                        <div class="book-info mr-8">                                                        
                            <h2 class="opacity-75">
                                Released Date
                            </h2>
                            <p><a href="#" class="text-lg text-semibold hover:opacity-75">{{ $book['released_date'] }}</a></p>
                        </div>
                        <div class="book-info mr-8">                                                        
                            <h2 class="opacity-75">
                                Edition
                            </h2>
                            <p><a href="#" class="text-lg text-semibold hover:opacity-75">Third Edition</a></p>
                        </div>
                        <div class="book-info mr-8">                                                        
                            <h2 class="opacity-75">
                                ISBN-13                                
                            </h2>
                            <p><a href="#" class="text-lg text-semibold hover:opacity-75">{{ $book['ISBN13'] }}</a></p>
                        </div>
                        <div class="book-info mr-8">                                                        
                            <h2 class="opacity-75">
                                ISBN-10
                            </h2>
                            <p><a href="#" class="text-lg text-semibold hover:opacity-75">{{ $book['ISBN10'] }}</a></p>
                        </div>                                               
                    </div>
                    <div class="mt-5 download_file">     
                        <div class="pb-5 grid grid-cols-2 lg:grid-cols-2 gap-5 text-left">
                            <div class="book-uploader mt-5 mb-5">                                                        
                                <h2 class="opacity-75">
                                    Uploaded by
                                </h2>
                                <p><a href="{{ route('user.profile', $user) }}" class="text-lg text-semibold hover:opacity-75">{{ $user->name }}</a></p>
                            </div>  
                            <div class="book-updated-time mt-5 mb-5">                                                        
                                <h2 class="opacity-75">
                                    Last Modified at
                                </h2>
                                <p><a class="text-lg text-semibold">{{ $book['updated_at'] }}</a></p>
                            </div>                     
                        </div>           
                        <h2 class="opacity-75 mb-5">
                            Download links
                        </h2>          
                        <div class="flex flex-wrap">                            
                            @foreach ($book['file_path'] as $filepath)
                                <div class="download-link mr-5 mt-5 lg:mt-0 text-left">                                                                    
                                    <a @auth href="/storage/bookLink/{{ $filepath }}" @endauth @guest disabled @endguest class="text-sm @guest cursor-not-allowed @endguest rounded-lg shadow-lg transition duration-150 text-darkcolor px-5 py-3 text-center bg-lightcolor font-semibold hover:opacity-75">
                                        Download
                                    </a>                                                                      
                                </div>
                            @endforeach                            
                        </div>                        
                        {{-- <div class="text-left mt-8">                                                        
                            <h2 class="opacity-75">
                                Supported File Types
                            </h2>
                            <p><a href="#" class="text-lg text-semibold hover:opacity-75">Epub, Pdf</a></p>
                        </div>  --}}
                    </div>
                </div>
            </div>
        </div>        
    </div>
    {{-- latest-book-section --}}     
@endsection
@endif