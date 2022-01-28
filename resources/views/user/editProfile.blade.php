@extends('layouts.app')

@section('content')
    {{-- profile-edit-section --}}
    <div id="profile" class="text-left py-10 md:py-18 px-12 text-lightcolor border-b border-lightcolor">        
        <div class="flex flex-wrap lg:flex-nowrap text-center md:text-left">
            <div class="img-and-edit-box">
                <img @if($user->file_path != null) 
                src="/storage/images/{{ $user->file_path }}"
                @else src="https://ui-avatars.com/api/?size=320&name=Khant"
                @endif alt="User Profile"  class="basis-2/5 rounded-lg shadow-lg max-w-xs h-[480px]">
                <div class="edit-box mt-3">
                    <a href="#" class="rounded-lg shadow-md hover:bg-slate-200 transition duration-200 bg-lightcolor text-darkcolor px-3 py-3 flex items-center justify-center w-36">
                        <svg class="text-darkcolor mr-3" width="20" height="20" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
                                <path d="M49.7574005,3.641675c-0.2174988-0.1520998-0.4855995-0.2114999-0.7468987-0.1636999
                                c-0.2602997,0.0467-0.4914017,0.1949-0.6424026,0.4122999L25.3518009,36.9533768
                                c-0.0888004,0.1266975-0.1463013,0.2728996-0.1687012,0.4269981l-1.5179996,10.4318008
                                c-0.0545998,0.3733978,0.1072998,0.7467995,0.4173012,0.9622993c0.170599,0.1189003,0.3704987,0.1794014,0.5702991,0.1794014
                                c0.1637993,0,0.3285999-0.0400009,0.4778004-0.1219025l9.2560005-5.0443001
                                c0.1364975-0.0741005,0.2534981-0.1783981,0.341198-0.3061981L57.743,10.4184752
                                c0.3149986-0.4524002,0.2038002-1.0743999-0.2486-1.3893003L49.7574005,3.641675z M33.2243996,42.1477737l-7.2964993,3.9757996
                                l1.1973-8.222599l22.3104-32.0499992l6.0992012,4.2458L33.2243996,42.1477737z"/>
                                <path d="M56.2173004,23.6249752c-0.551899,0-0.9984016,0.4465008-0.9984016,0.9983997v33.4958
                                c0,2.1419983-1.7421989,3.884201-3.8840981,3.884201H9.1864004c-2.1420002,0-3.8842001-1.7422028-3.8842001-3.884201V15.9707747
                                c0-2.1418991,1.7421999-3.8841991,3.8842001-3.8841991h24.8432999c0.5517998,0,0.9982986-0.4465008,0.9982986-0.9983006
                                s-0.4464989-0.9982996-0.9982986-0.9982996H9.1864004c-3.2427001,0-5.8809004,2.6381998-5.8809004,5.8807993V58.119175
                                c0,3.2425995,2.6382,5.8807983,5.8809004,5.8807983h42.1483994c3.2425995,0,5.8807983-2.6381989,5.8807983-5.8807983v-33.4958
                                C57.2155991,24.071476,56.7691002,23.6249752,56.2173004,23.6249752z"/>
                                <path d="M60.2495995,5.5067749l-8.0080986-5.3388c-0.4602013-0.306-1.0792999-0.1823-1.3843994,0.277
                                c-0.3062019,0.4591-0.1823006,1.0782,0.2767982,1.3844l8.0082016,5.3386998
                                c0.1706009,0.1131001,0.3625984,0.1676998,0.5527992,0.1676998c0.3226013,0,0.6394997-0.1559997,0.8316002-0.4445996
                                C60.8325996,6.4319749,60.7088013,5.8128753,60.2495995,5.5067749z"/>
                        </svg>
                        <span>Edit</span>
                    </a>
                </div>
            </div>
            <div class="text-left basis-3/4 ml-0 lg:ml-8 w-auto">                
                <h2 class="mb-3 mt-8 lg:mt-0 font-bold text-4xl opacity-75">
                    #{{ $user->username }}
                </h2>                  
                <div class="detail-box mt-3">
                    <h2 class="font-raleway font-bold text-lg opacity-75">
                        Name
                    </h2>
                    <p class="font-regular">
                        {{ $user->name }}
                    </p>
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
        </div>
    </div>
    {{-- profile-edit-section --}}     
@endsection