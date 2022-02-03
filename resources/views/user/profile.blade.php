@extends('layouts.app')

@section('content')            
    {{-- profile-section --}}
    <div id="profile" class="text-left py-10 md:py-18 px-12 text-lightcolor border-b border-lightcolor">        
        <div class="flex flex-wrap lg:flex-nowrap text-center md:text-left">
            {{-- profile-img-start --}}
            <div id="profile-img" class="img-and-edit-box">
                <img @if($user->file_path != null) 
                src="/storage/images/{{ $user->file_path }}"
                @else src="https://ui-avatars.com/api/?size=320&name=Khant"
                @endif alt="User Profile" id="profile-image" class="object-cover basis-2/5 rounded-lg shadow-lg max-w-xs h-[480px]">
                @if (auth()->user()->id == $user->id)                                    
                <div class="edit-box mt-3">
                    <a id="edit-button" class="cursor-pointer rounded-lg shadow-md hover:bg-slate-200 transition duration-200 bg-lightcolor text-darkcolor px-3 py-3 flex justify-center w-36">
                        <svg id="edit-svg" class="text-darkcolor mr-2" width="20" height="20" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
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
                        <svg id="cancel-svg" class="mt-[0.2rem] text-darkcolor mr-2" width="19" height="19" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
                            <path d="M43.7070007,19.2929993c-0.3906021-0.3906994-1.0234032-0.3906994-1.4140015,0L32,29.5858994L21.7070007,19.2929993
                            c-0.3906002-0.3906994-1.0234013-0.3906994-1.4140015,0c-0.3906994,0.3906002-0.3906994,1.0234013,0,1.4140015L30.5858994,31
                            L20.2929993,41.2929993c-0.3906994,0.3906021-0.3906994,1.0233994,0,1.4140015C20.4883003,42.9023018,20.7441006,43,21,43
                            s0.5116997-0.0976982,0.7070007-0.2929993L32,32.4141006l10.2929993,10.2929001C42.4882965,42.9023018,42.7440987,43,43,43
                            c0.2558975,0,0.5116959-0.0976982,0.7070007-0.2929993c0.3906975-0.3906021,0.3906975-1.0233994,0-1.4140015L33.4141006,31
                            l10.2929001-10.2929993C44.0976982,20.3164005,44.0976982,19.6835995,43.7070007,19.2929993z"/>
                            <path d="M32,0C14.3268995,0,0,14.3268003,0,32c0,17.6730995,14.3268995,32,32,32s32-14.3269005,32-32
                            C64,14.3268003,49.6730957,0,32,0z M32,62C15.4579,62,2,48.542099,2,32S15.4579,2,32,2s30,13.4579,30,30S48.542099,62,32,62z"/>
                        </svg>
                        <span id="edit-button-toggle">Edit</span>
                    </a>
                </div>
                @endif
            </div>
            {{-- profile-img-end --}}
            @if (auth()->user()->id != $user->id)
                <x-profile-details :user="$user" :books="$books"/>
            @else
                @if ($errors->any())
                <x-profile-details :user="$user" :books="$books"/>
                <x-edit-profile-details />
                @else
                <x-profile-details :user="$user" :books="$books"/>
                <x-edit-profile-details />
                @endif
            @endif            
        </div>
    </div>
    @if(auth()->user()->id == $user->id)
        {{-- profile-section --}}
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>  
        <script>        
            // edit-button toggle to change when click
            $('#edit-button').click(function(){
                $('#profile-details').toggle();
                $('#edit-profile-details').toggle();            
                if($('#edit-button-toggle').text() == "Edit"){
                    $('#edit-button-toggle').text('Cancel');
                    $('#cancel-svg').show();
                    $('#edit-svg').hide();
                    if($('#username').val() == ''){
                        $('#username').val($('#profile-username').text());
                    }                
                    if($('#name').val() == ''){
                        $('#name').val($('#profile-name').text());
                    }                                
                }
                else{
                    $('#edit-button-toggle').text('Edit');
                    $('#cancel-svg').hide();
                    $('#edit-svg').show();
                }
            });
            // edit-button toggle to change when click

            // replace path with empty space to get only the image name and extension
            $('#input-file').change(function(){
                $('#show-aft-img').text($('#input-file').val().replace('C:\\fakepath\\', ''));            
            });
            // replace path with empty space to get only the image name and extension

            $('#profile-edit-form').submit(function(){
                
                const profilename = $('#profile-name');
                const profileusername = $('#profile-username');
                const editname = $('#name');
                const editusername = $('#username');

                if(editname.val() == '' || editusername.val() == ''){
                    alert("Data Can't be empty!");
                    return false;
                }
                else if(profilename.text().trim() == editname.val().trim() && profileusername.text().trim() == editusername.val().trim() && $('#input-file').get(0).files.length == 0)
                {
                    alert("No Changes have been made");
                    return false;
                }
                else{                
                    $('#wait').show();
                }        
            });    

            // check controller for error and run only one script from two
            // for determining which form to show.
            @if ($errors->any())    
                $('#wait').hide();
                $('#edit-svg').hide();
                $('#edit-button-toggle').text('Cancel');
                $('#profile-details').hide(); 
                $('#edit-profile-details').show();                                  
            @else       
                $('#wait').hide();
                $('#cancel-svg').hide();
                $('#edit-profile-details').hide();                                    
            @endif
            // end
            
        </script>
    @endif
@endsection

