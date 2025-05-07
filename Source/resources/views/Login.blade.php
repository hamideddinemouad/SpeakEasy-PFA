@extends('components.HeadersAndBody')
@section('title', 'Login')
@section('content')

<x-Header />

    <!-- Main Content -->
    <main class="container mx-auto py-16 px-4">
        <div class="max-w-md mx-auto bg-white rounded-lg shadow-md p-8">
            <h1 class="text-3xl font-bold text-[#002D62] mb-6">Connexion</h1>

            <form action="/Login" method="post">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 opacity-75 text-sm font-bold mb-2">Adresse Email</label>
                    <input type="email" id="email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Votre adresse email">
                </div>

                <div class="mb-6">
                    <label for="password" class="block text-gray-700 opacity-75 text-sm font-bold mb-2">Mot de Passe</label>
                    <input type="password" id="password" name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Votre mot de passe">
                </div>

                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-[#E63946] hover:bg-red-700 text-[#F5F5F5] font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Se Connecter
                    </button>
                </div>
                <x-Errors />
            </form>
           
        </div>
    </main>

@endsection