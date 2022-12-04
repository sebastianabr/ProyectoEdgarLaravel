<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources\js\app.js')
    <title>@yield('titulo')</title>
</head>
<body class="">
    <div class=" md:grid md:grid-cols-7">
        <div id="sidebar" class="md:h-screen bg-pink-500 flex flex-col items-center border border-pink-700">
            <div class="mt-10 flex flex-col justify-center items-center">
                <p class="text-4xl text-center text-pink-800 font-extrabold">Tienda Rosas</p>
                <a href="{{route('menu-principal')}}"><img src="imagenes/rosa.svg" width="64" ></a>
            </div>
            <!-- AQUI ESTÁ EL MENÚ -->
            <div class="mt-10 flex flex-col justify-center items-center">
            <svg id="menu" xmlns="http://www.w3.org/2000/svg" class="mb-8 icon icon-tabler icon-tabler-menu-2" width="68" height="68" viewBox="0 0 24 24" stroke-width="3" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <line x1="4" y1="6" x2="20" y2="6" />
  <line x1="4" y1="12" x2="20" y2="12" />
  <line x1="4" y1="18" x2="20" y2="18" />
</svg>
            </div>
            <div id="contenedor" class="py-5 md:gap-12  md:justify-center flex w-full md:items-center  flex-col col-span-2 gap-4">
                <a href="{{route('categorias.index')}}" class="{{ request()->routeIs('categorias.index') ? 'bg-pink-600' :''}} text-white text-center text-lg font-extrabold hover:bg-pink-600 w-full rounded-lg py-5 flex justify-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                  </svg>
                  Categorias</a>
                <a href="{{route('productos.index')}}" class="{{ request()->routeIs('productos.index') ? 'bg-pink-600' :''}} text-white text-center text-lg font-extrabold hover:bg-pink-600 w-full rounded-lg py-5 flex justify-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                  </svg>
                  Productos</a>
                <a href="{{route('ventas.index')}}" class="{{ request()->routeIs('ventas.index') ? 'bg-pink-600' :''}} text-white text-center text-lg font-extrabold hover:bg-pink-600 w-full rounded-lg py-5 flex justify-center gap-3"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                  </svg>
                  Ventas</a>
                <a href="{{route('usuarios.index')}}" class="{{ request()->routeIs('usuarios.index') ? 'bg-pink-600' :''}} text-white text-center text-lg font-extrabold hover:bg-pink-600 w-full rounded-lg py-5 flex justify-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                  </svg>  Usuarios</a>
            </div>


        </div>
        <div id="contenido" class="col-span-6 ">
            <div id="nav" class="flex justify-between items-center p-8 shadow-lg">
                <p class="font-bold">Bienvenido: <span class="font-normal">{{auth()->user()->nombre}}</span></p>
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <input type="submit" value="Cerrar Sesión" class="bg-pink-600 text-white py-2 px-4 rounded-lg font-bold hover:bg-pink-700 hover:cursor-pointer">
                </form>
            </div>

            @yield('contenido')

        </div>
    </div>
</body>
</html>
