<div data-aos="fade-in" data-aos-duration="1500" id="book-card" class="mb-5 mx-auto md:mx-0 w-44 h-auto sm:h-80 sm:w-56 bg-darkcolor text-center text-lightcolor rounded-md shadow-2xl">    
    <a href="{{ route('books.show', $book['id']) }}">
        <img src="{{ $book['bookImg'] }}" alt="book-img" class="hover:opacity-80 object-cover w-full h-40 sm:h-64 sm:w-56 rounded-t-md">
    </a>
    <div id="book-card-content" class="p-4 text-left bg-darkcolor rounded-b-md">
        <p class="font-bold text-lightcolor text-sm">
           <a href="{{ route('books.show', $book['id']) }}" class="hover:opacity-80 transition duration-150">{{ $book['name'] }}</a>
        </p>
        <div class="truncate mt-1 font-semilight flex items-center text-sm">
            <span>
                <svg class="fill-current text-primarycolor w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
            </span>
            &nbsp;&nbsp;
            <span>
                @if ($book['rating'] != null)
                    {{ $book['rating'] }}/10
                @else
                    N/A
                @endif
            </span>
            &nbsp;&nbsp;
            <span> | </span>
            &nbsp;&nbsp;
            <span>{{ $book['released_date'] }}</span>
        </div>
    </div>
</div>