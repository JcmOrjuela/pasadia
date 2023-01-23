<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Pasadía</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon">
</head>

<body class="bg-gray-300">
    <header class="shadow-cyan-500/50 relative">
        <nav class="shadow-cyan-500/50 bg-gray-800 fixed top-0 left-0 right-0 flex justify-around items-center py-4">
            <a href="{{ route('home') }}" class="mx-3">
                <div class="flex justify-star items-center ml-3">
                    <img src="{{ asset('assets/images/logo.png') }}" alt=" LOGO JCM" class="h-10 mx-1 ">
                    <h1 class="text-xl text-cyan-500">PASADÍA</h1>
                </div>
            </a>
            <livewire:sesion-login></livewire:sesion-login>
            
            <form action="{{route('home')}}" method="GET" >
                <livewire:buscador></livewire:buscador>
            </form>
        </nav>
    </header>
    <main class="py-10 shadow p">
        <div class="container-fluid mx-auto p-4  bg-white rounded">
            @yield('content')
        </div>
    </main>
    <footer class="py-4 text-center shadow-lg bg-gray-800">
        <livewire:sesion-login></livewire:sesion-login>
    </footer>
</body>

</html>
