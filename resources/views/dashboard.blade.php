<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-around">
            <a href="{{ route('home') }}">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Pasadía.com') }}
                </h2>
            </a>
            <a href="{{ route('activity.index') }}">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Actividades') }}
                </h2>
            </a>
            <a href="{{ route('reserve.index') }}">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Reservas') }}
                </h2>
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                @if (isset($activities))
                    <table class="p-4">
                        <thead class="p-4">
                            <tr>
                                <th class="p-1 ml-1">N</th>
                                <th class="p-1 ml-1">Id</th>
                                <th class="p-1 ml-1">Título</th>
                                <th class="p-1 ml-1">Grupo</th>
                                <th class="p-1 ml-1">Resumen</th>
                                <th class="p-1 ml-1">Inicio</th>
                                <th class="p-1 ml-1">Fin</th>
                                <th class="p-1 ml-1">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($activities as $index => $activity)
                                <tr class="p-4 m-1">
                                    <td class="p-1 ml-1">{{ ++$index }}</td>
                                    <td class="p-1 ml-1">{{ $activity->id }}</td>
                                    <td class="p-1 ml-1">{{ $activity->title }}</td>
                                    <td class="p-1 ml-1">{{ $activity->parent_id }}</td>
                                    <td class="p-1 ml-1">{{ $activity->excerpt }}</td>
                                    <td class="p-1 ml-1">{{ $activity->start_date }}</td>
                                    <td class="p-1 ml-1">{{ $activity->due_date }}</td>
                                    <td class="p-1 ml-1">
                                        <div class="flex justify-center">
                                            <form action="{{ route('activity', $activity->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="cursor-pointer bg-red-500 p-1 rounded text-white">
                                                    <img src="https://img.icons8.com/ios-glyphs/20/ffffff/delete.png" />
                                                </button>
                                            </form>
                                            <a href="" class="cursor-pointer bg-blue-500 p-1 ml-1 rounded"> <img
                                                    src="https://img.icons8.com/ios-glyphs/20/ffffff/edit.png" />
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif

                @if (isset($reserves))
                    <table class="table p-4">
                        <thead class="p-4">
                            <tr>
                                <th class="p-1 ml-1">N</th>
                                <th class="p-1 ml-1">Id</th>
                                <th class="p-1 ml-1">Actividad</th>
                                <th class="p-1 ml-1">Usuario</th>
                                <th class="p-1 ml-1">Reservas</th>
                                <th class="p-1 ml-1">Total</th>
                                <th class="p-1 ml-1">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reserves as $index => $reserve)
                                <tr class="p-4 m-1">
                                    <td class="p-1 ml-1">{{ ++$index }}</td>
                                    <td class="p-1 ml-1">{{ $reserve->id }}</td>
                                    <td class="p-1 ml-1">{{ $reserve->activity->title ?? '' }}</td>
                                    <td class="p-1 ml-1">{{ $reserve->user->name }}</td>
                                    <td class="p-1 ml-1">{{ $reserve->quantity }}</td>
                                    <td class="p-1 ml-1">{{ $reserve->sub_total }}</td>
                                    <td class="p-1 ml-1">
                                        <div class="flex justify-center">
                                            <form action="{{ route('reserve.destroy', $reserve->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="cursor-pointer bg-red-500 p-1 rounded text-white">
                                                    <img src="https://img.icons8.com/ios-glyphs/20/ffffff/delete.png" />
                                                </button>
                                            </form>
                                            <a href="" class="cursor-pointer bg-blue-500 p-1 ml-1 rounded"> <img
                                                    src="https://img.icons8.com/ios-glyphs/20/ffffff/edit.png" />
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
