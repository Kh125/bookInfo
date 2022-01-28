{{-- profile-details-start --}}
<div id="profile-details" class="lg:mb-0 text-left basis-3/4 ml-0 lg:ml-8 w-auto">                
    <h2 class="mb-3 mt-8 lg:mt-0 font-bold text-4xl opacity-75">
        #<span id="profile-username">{{ $user->username }}</span>
    </h2>                  
    <div class="detail-box mt-3">
        <h2 class="font-raleway font-bold text-lg opacity-75">
            Name
        </h2>
        <p id="profile-name" class="font-regular">{{ $user->name }}</p>
    </div>
    <div class="detail-box mt-3">
        <h2 class="font-raleway font-bold text-md opacity-75">
            Email
        </h2>
        <p class="font-regular">
            {{ $user->email }}
        </p>
    </div>
    <div class="detail-box mt-3">
        <h2 class="font-raleway font-bold text-md opacity-75">
            Books Uploaded
        </h2>
        <p class="font-regular">
            {{ $books->count() }}
        </p>
    </div>                
    <div class="mt-8 top-rated-books">
        <h2 class="font-bold text-xl">
            @if ($books->count())                            
            @else  
                No
            @endif
            Uploaded Books
        </h2>
        <div class="mt-6 flex flex-row-2 flex-wrap">
            @foreach ($books as $book)
                <x-mini-book-card :book="$book"/>                            
            @endforeach                                                                              
        </div>
    </div>
</div>
{{-- profile-details-end --}}