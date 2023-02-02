@extends('layouts.app1')

@section('content')
<!-- component -->
<!-- This is an example component -->
<div class='mt-5 bg-white h-screen w-screen flex justify-center items-center'>
    <div class="px-6 py-3 rounded border w-64">
        <div class="flex flex-col items-center justify-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
            </svg>
            <h2 class="text-2xl font-bold">Register</h2>
        </div>
        <form action="{{route('validar-registro')}}" method="POST">
            @csrf
            <!-- username -->
            <div class="flex flex-col my-2">
                <label class="text-xs text-gray-400">Nombre</label>
                <div class="text-xs text-red-400 flex justify-between items-center">
                </div>
                <input
                    class="border rounded px-3 py-1 mt-2"
                    type="text"
                    name="name"/>
            </div>
            <div class="flex flex-col my-2">
                <label class="text-xs text-gray-400">Email</label>
                <div class="text-xs text-red-400 flex justify-between items-center">
                </div>
                <input
                    class="border rounded px-3 py-1 mt-2"
                    type="text"

                    name="email"/>
            </div>
            <div class="flex flex-col my-2">
                <label class="text-xs text-gray-400">Contraseña</label>
                <input class="border rounded px-3 py-1 mt-2" type="password" name="password"/>
            </div>
            <div class="flex flex-col items-center justify-center my-3">
                <button type="submit" class="my-3 py-1 w-full rounded bg-blue-600 text-blue-200">
                    Registrar
                </button>
            </div>

        </form>
    </div>
</div>
@endsection
