<div id="book-card" class="api-book-card mb-5 mx-auto md:mx-0 w-44 sm:h-80 sm:w-56 bg-darkcolor text-center text-lightcolor rounded-md shadow-2xl">    
    <a href="{{ route('books.show', $book['id']) }}">
        <img src="{{ $book['imageLink'] }}" alt="book-img" class="hover:opacity-80 object-cover w-full h-40 sm:h-64 sm:w-56 rounded-t-md">
    </a>
    <div id="book-card-content" class="p-4 text-left bg-darkcolor rounded-b-md">
        <p class="font-bold text-lightcolor text-sm max-h-11 overflow-y-hidden text-ellipsis">
           <a href="{{ route('books.show', $book['id']) }}" class="hover:opacity-80 transition duration-150">{{ $book['title'] }}</a>
        </p>
        <div class="truncate mt-1 font-semilight flex items-center text-sm">            
            @if (is_array($book['authors']))
            @foreach ($book['authors'] as $author)
                <span>{{ $author }}</span>
                @if (!$loop->last)
                &nbsp;&nbsp;
                <span> | </span>
                &nbsp;&nbsp;
                @endif           
            @endforeach
            @else
                <span>{{ $book['authors'] }}</span>
            @endif
            
        </div>
    </div>
</div>