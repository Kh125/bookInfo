<div data-aos="fade-in" data-aos-duration="1500" id="book-card" class="mx-auto md:mx-0 w-80 sm:w-56 bg-darkcolor text-center text-lightcolor rounded-md shadow-2xl">
    {{-- <img src="/img/a chit ka ly1.jpeg" alt="book-img" class="hover:opacity-80 object-cover w-80 sm:w-56 h-72 rounded-t-md"> --}}
    <img src="/storage/images/{{ $book['file_path'] }}" alt="book-img" class="hover:opacity-80 object-cover w-80 sm:w-56 h-72 rounded-t-md">
    <div id="book-card-content" class="p-4 text-left">
        <p class="font-bold text-lightcolor">
           <a href="{{ route('books.show', $book['id']) }}" class="hover:opacity-80 transition duration-150">{{ $book['name'] }}</a>
        </p>
        <p class="truncate mt-1 font-semilight">
            {{ $book['paragraph'] }}
        </p>
    </div>
</div>