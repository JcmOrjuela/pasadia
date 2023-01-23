@extends('layouts.web')

@section('content')
    <hr class=" shadow-lg">
    <div class="text-center mt-10 bg-cyan-200 py-10 mx-0 shadow-lg">
        <h1 class="text-6xl text-gray-700 mb-2 uppercase">Lo que mereces, Viaja Ya!</h1>
        <h2 class="text-l text-gray-600 ">Reserva Ya tus mejores vacaciones</h2>
        <h3 class="text-l text-gray-600">Arma tu paquete y viaja con los que amas</h3>

        <div class="mt-2">
            <form action="{{route('home')}}" class="flex justify-center">
                <div>
                    <label for="" class="block font-bold">Filtrar por fecha:</label>
                    <input  name="date" type="date" class="rounded w-full" name="" id="">
                </div>
                <div>
                    <label for="" class="block font-bold text-cyan-200">Buscar:</label>
                    <input type="submit"
                        class="cursor-pointer rounded w-full p-2 text-cyan-500
                     shadow-gray-800/20  bg-gray-800"
                        value="Buscar">
                </div>
            </form>
        </div>
    </div>

    <livewire:activity-list>

    </livewire:activity-list>
@endsection
