

@extends('components.HeadersAndBody')
@section('title', 'Home')
@section('content')


<x-Header />


    <section class="bg-[#002D62] text-[#F5F5F5] py-32">
        <div class="container mx-auto text-center px-4">
            <h1 class="text-5xl font-bold mb-6 leading-tight">Libérez Votre Potentiel Linguistique</h1>
            <p class="text-lg mb-12 opacity-75">Apprenez une nouvelle langue avec nos cours interactifs et personnalisés.</p>
            <div class="flex justify-center space-x-4">
                <a href="/quiz" class="bg-[#FFD700] hover:bg-yellow-400 text-[#001F3F] py-3 px-6 rounded-full text-xl transition duration-300">Faites le Quiz Gratuit</a>
            </div>
        </div>
    </section>

 
    <section class="py-16">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-12 px-4">
            <div class="p-6">
                <h3 class="text-xl font-semibold mb-3 text-[#002D62]">À propos de nous</h3>
                <p class="text-gray-700 opacity-75">Des leçons engageantes pour rendre l'apprentissage amusant et efficace.</p>
                <a href="/about" class="inline-block mt-4 bg-[#E63946] hover:bg-red-700 text-[#F5F5F5] py-2 px-4 rounded transition duration-300">En savoir plus</a>
            </div>
            <div class="p-6">
                <h3 class="text-xl font-semibold mb-3 text-[#002D62]">Nos programmes</h3>
                <p class="text-gray-700 opacity-75">Des parcours d'apprentissage personnalisés pour répondre à vos besoins individuels.</p>
                <a href="/programs" class="inline-block mt-4 bg-[#E63946] hover:bg-red-700 text-[#F5F5F5] py-2 px-4 rounded transition duration-300">Découvrez nos programmes</a>
            </div>
            <div class="p-6">
                <h3 class="text-xl font-semibold mb-3 text-[#002D62]">Professeurs experts</h3>
                <p class="text-gray-700 opacity-75">Apprenez avec des professeurs expérimentés et dévoués à votre réussite.</p>
                <a href="/teachers" class="inline-block mt-4 bg-[#E63946] hover:bg-red-700 text-[#F5F5F5] py-2 px-4 rounded transition duration-300">Rencontrez nos professeurs</a>
            </div>
        </div>
    </section>
    @endsection



