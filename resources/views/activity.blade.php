@extends('layouts.web')

@section('content')
    @if ($errors->any())
        <div class="mt-10 bg-red-400 text-white rounded p-2 ">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="grid grid-cols-4 gap-4 mt-10">
        <div class="text-gray-7 col-span-2 p-3">
            <div class="overflow-x-scroll flex  w-100 ">
                @foreach ($activity->images as $img)
                    <img src="{{ $img->src }}" alt="" class="h-80 w-80  rounded-lg mr-2">
                @endforeach
            </div>
            <div>
                <p class="text-gray-500 text-xs">
                    Inicio:
                    {{ $activity->start_date }}
                </p>
                <p class="text-gray-500 text-xs">
                    Fin:
                    {{ $activity->due_date }}
                </p>
            </div>
        </div>
        <div class="p-8 col-span-2 rounded">
            <ul class="flex flex-col">
                <li class="font-medium text-sm font-bold text-cyan-800 uppercase  ">{{ $activity->title }}</li>
                {{ $activity->description }}
            </ul>
            <div class="mt-5">
                <form action="{{ route('reserve') }}" method="POST">
                    @csrf
                    <input name="activity_id" value="{{ $activity->id }}" hidden>
                    <input name="user_id" value="{{ auth()->user()->id }}" hidden>
                    <input name="sub_total" value="{{ $activity->price }}" hidden>
                    <p class="text-xl font-bold text-red-600">Total: ${{ $activity->price }}</p>
                    <input name="n_persons" class="rounded mt-4" type="number" max="10" min="1"
                        value="1">
                    Personas
                    <input class="cursor-pointer bg-red-800 p-2 ml-3 text-white font-bold rounded" type="submit"
                        value="Reservar Ahora">
                </form>
            </div>
        </div>

    </div>
@endsection
