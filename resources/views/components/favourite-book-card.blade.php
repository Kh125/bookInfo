<div class="relative bg-white/30 backdrop-blur-sm rounded-lg hover:shadow-xl w-[21rem] h-32 mx-auto sm:mx-0 mb-16 sm:mr-2 md:mr-5 xl:mr-3">
    <a href="{{ route('books.show', $book['id']) }}">
        <img src="{{ $book['img'] }}" alt="" class="z-20 absolute -top-10 left-5 object-cover w-[5.4rem] h-28 rounded-md shadow-md hover:scale-110 transition duration-150">
    </a>
    <div class="pl-2 pr-1 absolute right-0 w-56 h-full">
        <h2 class="mt-3 font-bold max-h-[3rem] text-ellipsis overflow-y-hidden">
            <a href="{{ route('books.show', $book['id']) }}" class="hover:opacity-80 traisition duration-150">
                {{ $book['name'] }}
            </a>
        </h2>
        <p class="mb-[.6rem] flex items-center text-sm font-regular truncate">
            <span class=""><a href="#">Not found</a></span>
            {{-- &nbsp;
            <span>|</span>
            &nbsp; --}}            
        </p>
        <div class="flex">
            <a href="#" class="hover:scale-105 traisition duration-150 block truncate text-xs font-regular rounded-full max-w-[12.8rem] px-3 py-1 bg-lightcolor text-primarycolor mr-2">{{ $book['genres'] }}</a>            
        </div>
    </div>
</div>