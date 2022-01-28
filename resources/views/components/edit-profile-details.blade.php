{{-- edit-profile-details-start --}}
<div id="edit-profile-details" class="hidden mt-5 md:mt-0 text-left basis-3/4 ml-0 lg:ml-8">
    <h2 class="mb-3 mt-8 lg:mt-0 text-3xl font-semibold ">Edit Profile</h2>
    <form action="" enctype="multipart/form-data" class="mt-8" id="profile-edit-form" method="POST">
        @csrf                    
        <div class="mb-5 name">                        
            <input id="name" type="text" name="name" class="@error('name') border border-red-500 @enderror mt-1 rounded-lg px-6 py-2 outline-none text-sm text-darkcolor w-72 hover:shadow-md transition duration-200" placeholder="Name" value="{{ old('name') }}">
            @error('name')
                <div class="mt-2 error-box text-left text-red-500 text-sm">
                    <p>{{ $message }}</p>
                </div>                            
            @enderror
        </div> 
        <div class="mb-5 username">
            <input id="username" type="text" name="username" class="@error('username') border border-red-500 @enderror mt-1 rounded-lg px-6 py-2 outline-none text-sm text-darkcolor w-72 hover:shadow-md transition duration-200" placeholder="Username" value="{{ old('username') }}">                        
            @error('username')
                <div class="mt-2 error-box text-left text-red-500 text-sm">
                    <p>{{ $message }}</p>
                </div>                            
            @enderror
        </div> 
        
        <div id="img-box-update" class="w-72">
            <label
                class="flex flex-col w-72 h-32 border-4 border-blue-200 border-dashed hover:bg-gray-200 hover:border-gray-300">
                <div class="flex flex-col items-center justify-center pt-7">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-400 group-hover:text-gray-800"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                    </svg>
                    <p class="pt-1 text-sm tracking-wider text-lightcolor group-hover:text-gray-800">
                        Add new profile image
                    </p>
                </div>
                <input type="file" name="file_path" class="opacity-0" id="input-file" accept=".jpg, .jpeg, .png, .webp, .svg"/>
            </label>
            <p id="show-aft-img" class="mt-1 ">
                No Image
            </p>
        </div>
        <div class="mt-2 update-button w-72">
            <button class="flex bg-lightcolor text-darkcolor text-center px-6 py-2 rounded-lg hover:shadow-md">
                <span id="wait" class="mr-2">
                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; display: block; shape-rendering: auto;" width="200px" height="200px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                        <path fill="none" stroke="#24b0d0" stroke-width="8" stroke-dasharray="42.76482137044271 42.76482137044271" d="M24.3 30C11.4 30 5 43.3 5 50s6.4 20 19.3 20c19.3 0 32.1-40 51.4-40 C88.6 30 95 43.3 95 50s-6.4 20-19.3 20C56.4 70 43.6 30 24.3 30z" stroke-linecap="round" style="transform:scale(0.8);transform-origin:50px 50px">
                            <animate attributeName="stroke-dashoffset" repeatCount="indefinite" dur="1s" keyTimes="0;1" values="0;256.58892822265625"></animate>
                        </path>
                    </svg>
                </span>    
                <span>
                    Update
                </span>
            </button>
        </div>
    </form>
</div>
{{-- edit-profile-details-end --}}