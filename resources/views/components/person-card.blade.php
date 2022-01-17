<div class="mx-auto w-64 md:w-56">
    <img src="/img/{{ $profilepath}}" alt="profile" class="object-cover hover:opacity-80 w-64 md:w-56 h-64 md:h-56 rounded-full transition duration-180">
    <div id="person-info" class="p-4 text-center">
        <p class="font-semibold text-lg hover:opacity-75">
            <a href="#">{{ $name }}</a>
        </p>
        <span class="font-regular">
            Rating: {{ $rating }}
        </span>
    </div>
</div>