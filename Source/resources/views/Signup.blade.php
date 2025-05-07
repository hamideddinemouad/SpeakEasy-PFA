@extends('components.HeadersAndBody')
@section('title', 'Signup')
@section('content')

<x-Header />

    <main class="container mx-auto py-16 px-4">
        <div class="max-w-md mx-auto bg-white rounded-lg shadow-md p-8">
            <h1 class="text-3xl font-bold text-[#002D62] mb-6">Inscription</h1>

            <form action="/register" method="post">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 opacity-75 text-sm font-bold mb-2">Nom Complet</label>
                    <input type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Votre nom complet">
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-gray-700 opacity-75 text-sm font-bold mb-2">Adresse Email</label>
                    <input type="email" id="email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Votre adresse email">
                </div>

                <div class="mb-6">
                    <label for="password" class="block text-gray-700 opacity-75 text-sm font-bold mb-2">Mot de Passe</label>
                    <input type="password" id="password" name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Votre mot de passe">
                </div>

                 <div class="mb-6">
                    <label for="password_confirmation" class="block text-gray-700 opacity-75 text-sm font-bold mb-2">Confirmer Mot de Passe</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Confirmer votre mot de passe">
                </div>

                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-[#E63946] hover:bg-red-700 text-[#F5F5F5] font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        S'inscrire
                    </button>
                    <a class="inline-block align-baseline font-bold text-sm text-[#002D62] hover:text-blue-800" href="/Login">
                        Déjà un compte?
                    </a>
                </div>
            </form>
            <x-Errors />
        </div>
    </main>
@endsection

