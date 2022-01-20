@extends('layouts.app')

@section('content')
    {{-- latest-book-section --}}
    <div id="popular-book" class="px-8 py-20 bg-gradient-to-r from-primarycolor to-secondarycolor text-lightcolor border-b border-lightcolor">        
        <div class="text-center md:text-left">        
            <div class="flex flex-col md:flex-row">
                <div class="sm:mx-0 md:mx-0 w-[18rem] h-[25rem] md:mr-16 mb-16 lg:mb-0" data-aos="fade-right" data-aos-duration="700">
                    <img src="/storage/images/{{ $book['file_path'] }}" alt="dfsa" class="rounded-lg shadow-lg object-cover w-full h-full">
                    <div class="add-to-list mt-5 text-left">
                        <a class="cursor-pointer w-auto justify-center flex rounded-lg hover:shadow-lg px-4 py-3 transition duration-150 bg-lightcolor text-darkcolor">                            
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 473.935 473.935" style="enable-background:new 0 0 473.935 473.935;" xml:space="preserve">
                                <circle style="fill:#24B0D0;" cx="236.967" cy="236.967" r="236.967"/>
                                <path style="fill:#c94c50;" d="M315.519,111.865c-28.812,0-55.577,14.039-71.666,37.575l-3.323,4.224l-2.215-2.825
                                c-15.906-24.411-42.724-38.974-71.831-38.974c-49.668,0-85.717,36.048-85.717,85.709c0,73.328,132.744,181.394,142.424,189.174
                                c4.572,4.367,10.548,6.769,16.894,6.769s12.325-2.402,16.902-6.776c9.714-7.832,144.25-117.608,144.25-189.166
                                C401.228,147.913,365.184,111.865,315.519,111.865z"/>
                            </svg>
                            <span class="pl-3">Add to Favourite</span>                            
                        </a>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:basis-3/5 lg:basis-4/6 pt-5 md:pt-0" data-aos="fade-in" data-aos-duration="3000">
                    <h2 class="text-4xl font-bold uppercase text-left">
                        {{ $book['name'] }}
                    </h2>
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
                            <p><a href="#" class="text-lg text-semibold hover:opacity-75">Michael Boylor</a></p>
                        </div>
                        <div class="book-info mr-8">                                                        
                            <h2 class="opacity-75">
                                Producer
                            </h2>
                            <p><a href="#" class="text-lg text-semibold hover:opacity-75">Jordan Ramsey</a></p>
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
                            <p><a href="#" class="text-lg text-semibold hover:opacity-75">978-1491952023</a></p>
                        </div>
                        <div class="book-info mr-8">                                                        
                            <h2 class="opacity-75">
                                ISBN-10
                            </h2>
                            <p><a href="#" class="text-lg text-semibold hover:opacity-75">1491952024 </a></p>
                        </div>                                               
                    </div>
                    <div class="mt-8 download_file">
                        @auth
                            <div class="flex flex-wrap" data-aos="fade-in" data-aos-duration="1500">
                                <div class="download-link mr-5 mt-5 lg:mt-0 text-left">
                                    <h2 class="mb-5 opacity-75">
                                        GDrive
                                    </h2>
                                    <a href="#" class="rounded-lg shadow-lg transition duration-150 text-darkcolor px-5 py-3 text-center bg-lightcolor font-semibold hover:opacity-75">
                                        Download
                                    </a>
                                </div>
                                
                                <div class="download-link mr-5 mt-5 lg:mt-0 text-left">
                                    <h2 class="mb-5 opacity-75">
                                        Mediafire
                                    </h2>
                                    <a href="#" class="rounded-lg shadow-lg transition duration-150 text-darkcolor px-5 py-3 text-center bg-lightcolor font-semibold hover:opacity-75">
                                        Download
                                    </a>
                                </div>

                                <div class="download-link mr-5 mt-5 lg:mt-0 text-left">
                                    <h2 class="mb-5 opacity-75">
                                        Mega
                                    </h2>
                                    <a href="#" class="rounded-lg shadow-lg transition duration-150 text-darkcolor px-5 py-3 text-center bg-lightcolor font-semibold hover:opacity-75">
                                        Download
                                    </a>
                                </div>
                            </div>
                        @endauth
                        @guest
                            <div class="bg-lightcolor p-5 text-primarycolor font-semibold text-left w-auto shadow-xl rounded-tr-xl rounded-bl-xl cursor-not-allowed sm:w-[28rem]" data-aos="fade-in" data-aos-duration="1500">
                                Login to download the book.
                            </div>
                        @endguest
                        <div class="text-left mt-8">                                                        
                            <h2 class="opacity-75">
                                Supported File Types
                            </h2>
                            <p><a href="#" class="text-lg text-semibold hover:opacity-75">Epub, Pdf</a></p>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    {{-- latest-book-section --}}

    

    
@endsection