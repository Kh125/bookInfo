@extends('layouts.app')
@section('content')
    <div class="bg-gradient-to-r from-secondarycolor to-primarycolor text-lightcolor px-8 md:px-14 lg:px-24 mx-auto py-10 md:py-16">
        <div data-aos="fade-in" data-aos-duration="1000" class="mx-auto bg-white/30 backdrop-blur-sm login p-6 w-full sm:w-7/12 md:w-6/12 lg:w-5/12 xl:w-4/12  border border-lightcolor rounded-lg">
            <h2 class="mb-5 font-bold text-lg uppercase">Register!</h2>
            <div class="login-form">
                <form action="" method="POST" class="text-darkcolor">
                    @csrf
                    <div class="mb-5 name">
                        <label for="name" class="text-lg font-semibold text-lightcolor">Name</label>
                        <input type="text" name="name" class="@error('name') border border-red-500 @enderror mt-1 w-full rounded-lg px-6 py-2 outline-none" placeholder="Name" value="{{ old('name') }}">
                        @error('name')
                            <div class="mt-2 error-box text-left text-red-500 text-sm">
                                <p>{{ $message }}</p>
                            </div>                            
                        @enderror
                    </div>
                    <div class="mb-5 email">
                        <label for="email" class="text-lg font-semibold text-lightcolor">Email</label>
                        <input type="email" name="email" class="@error('email') border border-red-500 @enderror mt-1 w-full rounded-lg px-6 py-2 outline-none" placeholder="Email" value="{{ old('email') }}">
                        @error('email')
                            <div class="mt-2 error-box text-left text-red-500 text-sm">
                                <p>{{ $message }}</p>
                            </div>                            
                        @enderror
                    </div>
                    <div class="mb-5 username">
                        <label for="username" class="text-lg font-semibold text-lightcolor">Username</label>
                        <input type="text" name="username" class="@error('username') border border-red-500 @enderror mt-1 w-full rounded-lg px-6 py-2 outline-none" placeholder="Username" value="{{ old('username') }}">
                        @error('username')
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
                    <div class="mb-5 confirm_password">
                        <label for="confirm_password" class="text-lg font-semibold text-lightcolor">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="@error('password_confirmation') border border-red-500 @enderror mt-1 w-full rounded-lg px-6 py-2 outline-none" placeholder="Confirm your password">
                    </div>
                    <button class="px-4 py-2 bg-darkcolor text-lightcolor rounded-lg hover:text-primarycolor hover:bg-lightcolor transition duration-150">
                        Register
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection