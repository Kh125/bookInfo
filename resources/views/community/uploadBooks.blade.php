@extends('layouts.app')
@section('content')
    <div class="books-upload bg-primarycolor text-lightcolor px-8 md:px-14 lg:px-24 mx-auto py-10 md:py-16">          
        <div data-aos="fade-in" data-aos-duration="1000" class="mx-auto bg-white/30 backdrop-blur-sm login p-6 w-full sm:w-7/12 md:w-6/12 lg:w-5/12 xl:w-4/12 border border-lightcolor rounded-lg">
            <h2 class="mb-5 font-bold text-2xl uppercase">Upload your book</h2>
            <div class="books-upload-form">
                <form id="form" action="" method="POST" class="text-darkcolor">
                    @csrf   
                    {{-- first-section --}} 
                    <div id="first-section-box">

                        <div class="mb-4 name">
                            <label for="name" class="text-md font-montserrat font-semibold text-lightcolor">Title</label>
                            <input id="name" type="text" name="name" class="@error('name') border border-red-500 @enderror mt-1 w-full rounded-lg px-4 py-2 outline-none text-sm" placeholder="Enter book title" value="{{ old('name') }}">                        
                        </div>          

                        <div class="mb-4 author">
                            <label for="author" class="text-md font-montserrat font-semibold text-lightcolor">Author</label>
                            <input id="author" type="text" name="author" class="@error('author') border border-red-500 @enderror mt-1 w-full rounded-lg px-4 py-2 outline-none text-sm" placeholder="Enter author name (use  comma(' , ')  to add more author)">                        
                        </div>
                        
                        <div class="mb-4 genres">
                            <label for="genres" class="text-md font-montserrat font-semibold text-lightcolor">Genres</label>
                            <input id="genres" type="text" name="genres" class="@error('genres') border border-red-500 @enderror mt-1 w-full rounded-lg px-4 py-2 outline-none text-sm" placeholder="Genres(use comma (' , ') after one genre)">                        
                        </div>
                                
                        <div class="mb-3 description">
                            <label for="description" class="text-md font-montserrat font-semibold text-lightcolor">Description</label>
                            <textarea name="description" id="description" cols="30" rows="3" class="@error('description') border border-red-500 @enderror mt-1 rounded-lg px-4 py-2 outline-none resize-none w-full text-sm" placeholder="Enter the description of book..."></textarea>
                        </div>

                        <div class="mb-4 released_date">
                            <label for="released_date" class="text-md font-montserrat font-semibold text-lightcolor">Released Date</label>
                            <input id="released_date" type="date" name="released_date" class="@error('released_date') border border-red-500 @enderror mt-1 w-full rounded-lg px-4 py-2 outline-none text-sm" placeholder="Enter released date">
                        </div>

                        <button id="next-button" class="px-5 py-2 bg-darkcolor text-lightcolor rounded-lg hover:text-primarycolor hover:bg-lightcolor transition duration-150">
                            <span class="">Next</span> 
                        </button>

                    </div>
                    {{-- first-section --}}

                    {{-- second-section --}}
                    <div id="second-section-box">

                        <div class="mb-5 producer">
                            <label for="producer" class="text-md font-montserrat font-semibold text-lightcolor">Producer name</label>
                            <input id="producer" type="text" name="producer" class="@error('producer') border border-red-500 @enderror mt-1 w-full rounded-lg px-4 py-2 outline-none text-sm" placeholder="Producer Name" value="{{ old('producer') }}">                        
                        </div>                    
                        <div class="mb-5 isbn13">
                            <label for="isbn13" class="text-md font-montserrat font-semibold text-lightcolor">ISBN 13</label>
                            <input id="isbn13" type="text" name="isbn13" class="@error('isbn13') border border-red-500 @enderror mt-1 w-full rounded-lg px-4 py-2 outline-none text-sm" placeholder="Enter ISBN 13 code">
                        </div>  

                        <div class="mb-5 isbn10">
                            <label for="isbn10" class="text-md font-montserrat font-semibold text-lightcolor">ISBN 10</label>
                            <input id="isbn10" type="text" name="isbn10" class="@error('isbn10') border border-red-500 @enderror mt-1 w-full rounded-lg px-4 py-2 outline-none text-sm" placeholder="Enter ISBN 10 code">
                        </div>  
        
                        <div class="ebook_file 1st-input mb-3">
                            <label for="ebook_file" class="text-md font-montserrat font-semibold text-lightcolor">Book</label>
                            <div class="flex justify-between">
                                <label for="ebook_file" class="img-boxx @error('ebook_file') border border-red-500 @enderror relative flex flex-col outline-none text-sm bg-lightcolor rounded-lg w-full px-4 mt-1 p-2 py-3">
                                    <x-upload-box/>                         
                                </label> 
                                {{-- to add new upload box --}}
                                <button type="button" class="add-button p-2">
                                    <svg width="23" height="23" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        viewBox="0 0 489.8 489.8" style="enable-background:new 0 0 489.8 489.8;" xml:space="preserve">
                                        <path d="M438.2,0H51.6C23.1,0,0,23.2,0,51.6v386.6c0,28.5,23.2,51.6,51.6,51.6h386.6c28.5,0,51.6-23.2,51.6-51.6V51.6
                                        C489.8,23.2,466.6,0,438.2,0z M465.3,438.2c0,14.9-12.2,27.1-27.1,27.1H51.6c-14.9,0-27.1-12.2-27.1-27.1V51.6
                                        c0-14.9,12.2-27.1,27.1-27.1h386.6c14.9,0,27.1,12.2,27.1,27.1V438.2z"/>
                                        <path d="M337.4,232.7h-80.3v-80.3c0-6.8-5.5-12.3-12.3-12.3s-12.3,5.5-12.3,12.3v80.3h-80.3c-6.8,0-12.3,5.5-12.3,12.2
                                        c0,6.8,5.5,12.3,12.3,12.3h80.3v80.3c0,6.8,5.5,12.3,12.3,12.3s12.3-5.5,12.3-12.3v-80.3h80.3c6.8,0,12.3-5.5,12.3-12.3
                                        C349.7,238.1,344.2,232.7,337.4,232.7z"/>
                                    </svg>
                                </button>
                                {{-- to add new upload box --}}                        
                            </div>                                                         
                        </div> 
                                                

                        {{-- hidden upload box to copy and clone  --}}
                        <div class="added-box-clone hidden">
                        <div class="ebook_file flex justify-between mb-3">                            
                            <label for="ebook_file" class="img-boxx added-image-box-clone @error('ebook_file') border border-red-500 @enderror relative flex flex-col outline-none text-sm bg-lightcolor rounded-lg w-full px-4 mt-1 p-2 py-3">
                                <x-upload-box/>                                
                            </label>    
                            {{-- to add new upload box --}}
                            <button type="button" class="remove-button p-2">
                                <svg width="23" height="23" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 492.308 492.308" style="enable-background:new 0 0 492.308 492.308;" xml:space="preserve">
                                    <path d="M246.154,0C110.423,0,0,110.423,0,246.154s110.423,246.154,246.154,246.154s246.154-110.423,246.154-246.154
                                    S381.885,0,246.154,0z M246.154,472.615c-124.87,0-226.462-101.591-226.462-226.462S121.284,19.692,246.154,19.692
                                    s226.462,101.591,226.462,226.462S371.024,472.615,246.154,472.615z"/>
                                    <rect x="105.029" y="236.308" width="282.26" height="19.692"/>
                                </svg>
                            </button>
                            {{-- to add new upload box --}}                        
                        </div>      
                        </div>
                        {{-- hidden upload box to copy and clone  --}}                    
                                   
                        <div class="flex items-center justify-between mt-5">
                            <button id="prev-button" class="px-5 py-2 bg-darkcolor text-lightcolor rounded-lg hover:text-primarycolor hover:bg-lightcolor transition duration-150">                                                    
                                <span class="">Previous</span> 
                            </button>
                            <button id="form-button" class="flex px-5 py-2 bg-darkcolor text-lightcolor rounded-lg hover:text-primarycolor hover:bg-lightcolor transition duration-150">
                                <span id="wait" class="mr-2">
                                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; display: block; shape-rendering: auto;" width="200px" height="200px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                                        <path fill="none" stroke="#24b0d0" stroke-width="8" stroke-dasharray="42.76482137044271 42.76482137044271" d="M24.3 30C11.4 30 5 43.3 5 50s6.4 20 19.3 20c19.3 0 32.1-40 51.4-40 C88.6 30 95 43.3 95 50s-6.4 20-19.3 20C56.4 70 43.6 30 24.3 30z" stroke-linecap="round" style="transform:scale(0.8);transform-origin:50px 50px">
                                          <animate attributeName="stroke-dashoffset" repeatCount="indefinite" dur="1s" keyTimes="0;1" values="0;256.58892822265625"></animate>
                                        </path>
                                    </svg>
                                </span>                        
                                <span class="">Upload</span> 
                            </button>
                        </div>   

                    </div>   
                    {{-- second-section --}}

                </form>
            </div>
        </div>
    </div>  
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>      
    <script>
        $('#wait').hide();
        $('#second-section-box').hide();        
        // $('#first-section-box').hide();        
        $(document).ready(        
            function(){
              
                $('#next-button').click(function(e){
                    e.preventDefault();
                    $('#first-section-box').hide();
                    $('#second-section-box').show();
                });
                $('#prev-button').click(function(e){
                    e.preventDefault();
                    $('#first-section-box').show();
                    $('#second-section-box').hide();
                });
                $('#form-button').click(function(){
                    $('#wait').show();
                });

                // add new element for file upload
                $(".add-button").click(function(){
                    var cloneelement = $(".added-box-clone").html();
                    $(".1st-input").after(cloneelement);
                });
                $("body").on("click",".remove-button", function(){
                    $(this).parents(".ebook_file").remove();
                });
                // add new element for file upload

                $('.ebook-file-upload').change(function(){
                    $(this).text($(this).val().replace('C:\\fakepath\\', ''));
                });
            }
        );
    </script>
@endsection