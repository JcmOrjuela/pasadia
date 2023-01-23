    <div class="bg-wihte shadow-lg rounded-lg px-4 py-6 text-center">
        <a href="{{ route('activity', $activity->id) }}">
            <img src="{{ $activity->portada }}" alt="{{ $activity->title }}" class="rounded-md mb-2 ">
            <h2 class="uppercase truncate">{{ $activity->title }}</h2>
            <p class="text-justify truncate">{{ $activity->excerpt }}</p>

            <div class="flex">
                @for ($i = 0; $i < $activity->qualification; $i++)
                    <img class="ml-1 h-5 " src="{{ asset('assets/icons/star.png') }}" alt="points">
                @endfor
            </div>

            <div class="mt-3">
                <h3 class="font-bold  text-red-500">${{ $activity->price }}</h3>
                <button class="cursor-pointer bg-cyan-500 font-bold text-gray-800 p-3 rounded mt-3">
                    Comprar Ahora
                </button>
            </div>
        </a>
    </div>
