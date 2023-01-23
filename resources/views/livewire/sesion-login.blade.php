<div>
    @auth
        <a href="{{ url('dashboard') }}" class="text-cyan-500 underline"> Administrador </a>
    @else
        <a class="text-cyan-500 underline" href="{{ url('login') }}"> Iniciar sesión </a>
        <a class="ml-4 text-cyan-500 underline" href="{{ url('register') }}"> Registrase </a>
        @endif
    </div>
