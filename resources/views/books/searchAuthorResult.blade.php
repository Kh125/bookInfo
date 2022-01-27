@extends('layouts.app')

@section('content')
    {{-- search-book-section --}}
    <div data-aos="fade-in" data-aos-duration="2000" id="book" class="z-40 text-left py-10 md:py-18 px-2 sm:px-12 text-lightcolor border-b border-lightcolor">
        <div class="mt-6 text-center ml-0 sm:ml-12 md:ml-0 sm:text-left">            
            <h2 class="uppercase text-xl font-bold">
                @if ($result != false)
                Search Results
                @else
                No Result
                @endif
                for {{ $searchQuery }}
            </h2>
            @if ($result != false)
            <span class="pt-3 md:pt-8 font-regular text-darkcolor">
                Sorted by newest to oldest.
            </span>
            @endif
        </div>
        @if ($result != false)
            <div class="search-result-grid mx-auto sm:mx-0 mt-12 grid grid-wrap grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-3 sm:gap-8 lg:gap-12">
                @foreach($searchResults as $book)
                    <x-search-book-card :book="$book" />
                @endforeach
            </div>
            <div class="page-load-status text-center my-16">
                <div class="infinite-scroll-request">Loading...</div>
                <p class="infinite-scroll-last">End of content</p>
                <p class="infinite-scroll-error">No more pages to load</p>
            </div> 
        @endif
        
    </div>
    {{-- search-book-section --}}
    <script src="https://unpkg.com/infinite-scroll@4/dist/infinite-scroll.pkgd.min.js"></script>
    <script>
        let elem = document.querySelector('.search-result-grid');
        let infScroll = new InfiniteScroll( elem, {
        path: '/search/author/page/@{{#}}?author={{ $searchQuery }}',
        append: '.api-book-card',
        status: '.page-load-status'
        // history: false,
        });        
    </script>
@endsection