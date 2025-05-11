@extends('components.HeadersAndBody')

@section('title', 'Unauthorized')

@section('content')

<x-Header />


    <main class="container mx-auto py-16 px-4">
        <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-md p-8 text-center">
            <h1 class="text-4xl font-bold text-[#E63946] mb-6">Accès Interdit</h1>

            <p class="text-lg text-gray-700 opacity-75 mb-8">
                Vous n'avez pas la permission d'accéder à cette page.
            </p>

            <p class="text-lg text-gray-700 opacity-75 mb-8">
                Veuillez contacter l'administrateur si vous pensez qu'il s'agit d'une erreur.
            </p>

            <div class="flex justify-center">
                <a href="/" class="bg-[#002D62] hover:bg-navy-blue text-[#F5F5F5] py-3 px-6 rounded-full text-xl transition duration-300">
                    Retour à l'accueil
                </a>
            </div>
        </div>
    </main>



@endsection