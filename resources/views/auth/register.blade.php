@extends('layouts.main')

@section('title')
Regístrate
@endsection()

@section('content')
<div class="md:flex md:gap-6 md:items-center">
    <div class="md:w-1/2">
        <img src="{{ asset('images/contra_luz.jpg') }}" alt="Imagen de Aernout Bouwman" srcset="">
    </div>
    <div class="md:w-1/2 bg-white p-6 rounded-lg shadow-xl">
        <form action="{{ route('registro') }}" method="post">
            @csrf
            <div class="mb-5">
                <label for="name" class = "mb-2 block uppercase text-gray-500 font-bold">Nombre</label>
                <input type="text" id="name" name="name" placeholder="Tu nombre" class="border p-3 w-full rounded-lg">
                @error('name')
                <span class="text-red-500 my-2 text-sm p-2 text-center">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-5">
                <label for="username" class = "mb-2 block uppercase text-gray-500 font-bold">Username</label>
                <input type="text" id="username" name="username" placeholder="Tu nombre de usuario" class="border p-3 w-full rounded-lg">
                @error('name')
                <span class="text-red-500 my-2 text-sm p-2 text-center">El usuario es obligatorio</span>
                @enderror
            </div>
            <div class="mb-5">
                <label for="email" class = "mb-2 block uppercase text-gray-500 font-bold">E-mail</label>
                <input type="email" id="email" name="email" placeholder="Tu e-mail" class="border p-3 w-full rounded-lg">
                @error('name')
                <span class="text-red-500 my-2 text-sm p-2 text-center">El correo electronico es obligatorio</span>
                @enderror
            </div>
            <div class="mb-5">
                <label for="password" class = "mb-2 block uppercase text-gray-500 font-bold">Password</label>
                <input type="password" id="password" name="password" placeholder="Tu contraseña" class="border p-3 w-full rounded-lg">
                @error('name')
                <span class="text-red-500 my-2 text-sm p-2 text-center">La contraseña es obligatoria</span>
                @enderror
            </div>
            <div class="mb-5">
                <label for="password_confirmation" class = "mb-2 block uppercase text-gray-500 font-bold">Repeat password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Repite tu contraseña" class="border p-3 w-full rounded-lg">
                @error('name')
                <span class="text-red-500 my-2 text-sm p-2 text-center">Es necesario confirmar la contraseña</span>
                @enderror
            </div>
            <input type="submit" value="Crear cuenta" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
        </form>
    </div>
</div>
@endsection()