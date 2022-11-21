<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>Clonestagram - @yield('title')</title>
</head>
<body class = "bg-gray-50">
  <header class = "p-5 border-b bg-white shadow">
    <div class = "container mx-auto flex justify-between items-center">
      <h1 class = "text-3xl font-black">Clonestagram</h1>
      <nav class="flex gap-2 items-center">
        <a href="/" class ="font-bold uppercase text-gray-600 text-sm">Home</a>
        <a href="#" class ="font-bold uppercase text-gray-600 text-sm">Login</a>
        <a href="{{ route('registro') }}" class = "font-bold uppercase text-gray-600 text-sm">Regístrate</a>
      </nav>
    </div>
  </header>

  <main class="container mx-auto px-20 mt-5">
    <h2 class="font-black text-center text-3xl mb-8">@yield('title')</h2>
   @yield('content')
  </main>

  <footer class = "text-center p-5 text-gray-500 font-bold uppercase">
    Clonestagram - &copy {{ date('Y') }} All Right Reserved
  </footer>
</body>
</html>