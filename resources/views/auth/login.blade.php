@extends('layouts.app')
@section('content')
    <div class="bg-gradient-to-r from-primarycolor to-secondarycolor text-lightcolor px-8 md:px-14 lg:px-24 mx-auto py-10 md:py-16">          
        <div data-aos="fade-in" data-aos-duration="1000" class="mx-auto bg-white/30 backdrop-blur-sm login p-6 w-full sm:w-7/12 md:w-6/12 lg:w-5/12 xl:w-4/12 border border-lightcolor rounded-lg">
            <h2 class="mb-5 font-bold text-lg uppercase">Login to explore!</h2>
            <div class="login-form">
                <form action="" method="POST" class="text-darkcolor">
                    @csrf                    
                    <div class="mb-5 email">
                        <label for="email" class="text-lg font-semibold text-lightcolor">Email</label>
                        <input type="email" name="email" class="@error('email') border border-red-500 @enderror mt-1 w-full rounded-lg px-6 py-2 outline-none" placeholder="Email" value="{{ old('email') }}">
                        @error('email')
                            <div class="mt-2 error-box text-left text-red-500 text-sm">
                                <p>{{ $message }}</p>
                            </div>                            
                        @enderror
                    </div>                    
                    <div class="mb-5 password">
                        <label for="password" class="text-lg font-semibold text-lightcolor">Password</label>
                        <input type="password" name="password" class="@error('password') border border-red-500 @enderror mt-1 w-full rounded-lg px-6 py-2 outline-none" placeholder="Enter your Password">
                        @error('password')
                            <div class="mt-2 error-box text-left text-red-500 text-sm">
                                <p>{{ $message }}</p>
                            </div>                            
                        @enderror
                    </div>                    
                    <button class="px-5 py-2 bg-darkcolor text-lightcolor rounded-lg hover:text-primarycolor hover:bg-lightcolor transition duration-150">
                        Login
                    </button>
                </form>
            </div>
        </div>
    </div>    
@endsection