<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>

<body>
    <div class="container w-75 p-3">
        <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="container">
                    <div class="row">
                        <div class="col-10">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a href="/users" class="nav-link text-white">Usuários</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/posts" class="nav-link text-white">Posts</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-2">
                            <ul class="navbar-nav mr-auto">
                                @if(Auth::user())
                                <li class="nav-item">
                                    <a href="#" class="nav-link text-white">{{ Auth::user()->name }}</a>
                                </li>
                                <li class="nav-item">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <x-responsive-nav-link class="nav-link text-white" :href="route('logout')" onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                            {{ __('Sair') }}
                                        </x-responsive-nav-link>
                                    </form>
                                </li>
                                @else
                                <li class="nav-item">
                                    <a href="{{ route('login') }}" class="nav-link text-white">Entrar</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('register') }}" class="nav-link text-white">Registrar-se</a>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        @yield('body')
    </div>
</body>

</html>