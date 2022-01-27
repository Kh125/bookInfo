@extends('layouts.app')
@section('content')
    <div class="bg-primarycolor text-lightcolor px-8 md:px-14 lg:px-24 mx-auto py-10 md:py-16">          
        <div data-aos="fade-in" data-aos-duration="1000" class="mx-auto bg-white/30 backdrop-blur-sm login p-6 w-full sm:w-7/12 md:w-6/12 lg:w-5/12 xl:w-4/12 border border-lightcolor rounded-lg">
            <h2 class="mb-5 font-bold text-lg uppercase">Login to explore!</h2>
            <div class="login-form">
                <form id="form" action="" method="POST" class="text-darkcolor">
                    @csrf                    
                    <div class="mb-5 email">
                        <label for="email" class="text-lg font-semibold text-lightcolor">Email</label>
                        <input id="email" type="email" name="email" class="@error('email') border border-red-500 @enderror mt-1 w-full rounded-lg px-6 py-2 outline-none" placeholder="Email" value="{{ old('email') }}">
                        @error('email')
                            <div class="mt-2 error-box text-left text-red-500 text-sm">
                                <p>{{ $message }}</p>
                            </div>                            
                        @enderror
                    </div>                    
                    <div class="mb-5 password">
                        <label for="password" class="text-lg font-semibold text-lightcolor">Password</label>
                        <input id="password" type="password" name="password" class="@error('password') border border-red-500 @enderror mt-1 w-full rounded-lg px-6 py-2 outline-none" placeholder="Enter your Password">
                        @error('password')
                            <div class="mt-2 error-box text-left text-red-500 text-sm">
                                <p>{{ $message }}</p>
                            </div>                            
                        @enderror
                    </div>                    
                    <button id="form-button" class="flex px-5 py-2 bg-darkcolor text-lightcolor rounded-lg hover:text-primarycolor hover:bg-lightcolor transition duration-150">
                        <span id="wait" class="mr-2">
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; display: block; shape-rendering: auto;" width="200px" height="200px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                                <path fill="none" stroke="#24b0d0" stroke-width="8" stroke-dasharray="42.76482137044271 42.76482137044271" d="M24.3 30C11.4 30 5 43.3 5 50s6.4 20 19.3 20c19.3 0 32.1-40 51.4-40 C88.6 30 95 43.3 95 50s-6.4 20-19.3 20C56.4 70 43.6 30 24.3 30z" stroke-linecap="round" style="transform:scale(0.8);transform-origin:50px 50px">
                                  <animate attributeName="stroke-dashoffset" repeatCount="indefinite" dur="1s" keyTimes="0;1" values="0;256.58892822265625"></animate>
                                </path>
                            </svg>
                        </span>                        
                        <span class="">Login</span> 
                    </button>                
                </form>
            </div>
        </div>
    </div>  
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>  
    <script>
        $('#wait').hide();
        $(document).ready(        
            function(){
                $('#form-button').click(function(){
                    $('#wait').show();
                });
            }
        );
    </script>
@endsection