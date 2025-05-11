@extends('components.HeadersAndBody')

@section('title', 'Quiz Results')

@section('content')
    <x-Header />

    <main class="container mx-auto py-16 px-4">
        <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-md p-8 text-center">
        <h1 class="text-3xl font-bold text-green-500 mb-6">Test Terminé !</h1>

        <p class="text-lg text-gray-700 opacity-75 mb-4">
            Votre niveau est  <span class="inline-block bg-red-100 text-red-700 font-semibold px-3 py-1 rounded-full shadow-sm">{{$level}}</span> 
        </p>

        <p class="text-lg text-gray-700 opacity-75 mb-8">
            
        </p>

        <div class="flex justify-center">
            <a href="/" class="bg-[#002D62] hover:bg-navy-blue text-[#F5F5F5] py-3 px-6 rounded-full text-xl transition duration-300">
             Accueil
            </a>
        </div>
        </div>
    </main>

   
@endsection