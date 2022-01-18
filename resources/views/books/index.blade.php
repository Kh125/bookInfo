@extends('layouts.appauth')

@section('content')
    {{-- latest-book-section --}}
    <div id="popular-book" class="text-left py-10 md:py-18 px-12 bg-gradient-to-r from-primarycolor to-secondarycolor text-lightcolor border-b border-lightcolor" data-aos="fade-in" data-aos-duration="3000">
        <div class="text-center md:text-left">
            <h2 class="uppercase text-lg font-semibold">
                Latest Release Books
            </h2>
            <span class="pt-3 md:pt-8 font-regular text-darkcolor">
                Check our latest released books for this month
            </span>
        </div>
        <div class="mt-10 grid grid-wrap grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-8 lg:gap-12">
            @for ($i = 0; $i < 10; $i++)
                <x-book-card title="Winter Misty" desc="A book about cold weather with no boyfriend"/>            
            @endfor
        </div>
    </div>
    {{-- latest-book-section --}}

    {{-- popular-book-section --}}
    <div data-aos="fade-in" data-aos-duration="3000" id="popular-book" class="text-left py-10 md:py-18 px-12 bg-gradient-to-r from-primarycolor to-secondarycolor text-lightcolor border-b border-lightcolor">
        <div class="text-center md:text-left">
            <h2 class="uppercase text-lg font-semibold">
                Most Popular Books of This Week
            </h2>
            <span class="pt-3 md:pt-8 font-regular text-darkcolor">
                Take a look at our most popular books of this week rated by the users.
            </span>
        </div>
        <div class="mt-10 grid grid-wrap grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-8 lg:gap-12">
            @for ($i = 0; $i < 10; $i++)
                <x-book-card title="Winter Misty" desc="A book about cold weather with no boyfriend"/>            
            @endfor
        </div>
    </div>
    {{-- popular-book-section --}}

    
@endsection