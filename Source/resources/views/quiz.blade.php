@extends('components.HeadersAndBody')
@section('title', 'Quiz')
@section('content')

<x-Header />
    <!-- Main Content -->
    <main class="container mx-auto py-16 px-4">
        <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-md p-8">
            <h1 class="text-3xl font-bold text-[#002D62] mb-6">Testez Votre Niveau de Français</h1>

            <!-- Timer -->
            <div class="text-gray-600 mb-4">Temps Restant: <span id="timer">00:59</span></div>

            <!-- Question -->
            <div id="questionContainer">
                <p class="text-lg font-semibold text-[#002D62] mb-4">Choisissez la phrase correcte :</p>
                <div class="space-y-2">
                    <label class="flex items-center">
                        <input type="radio" name="answer" value="a" class="mr-2">
                        <span>A Je suis mangeant une pomme.</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="answer" value="b" class="mr-2">
                        <span>B Je mange une pomme.</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="answer" value="c" class="mr-2">
                        <span>C Je vais manger une pomme.</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="answer" value="d" class="mr-2">
                        <span>D Je ai mange une pomme.</span>
                    </label>
                </div>

                <div class="mt-6 text-center">
                    <a href="/quiz/results" class="bg-[#E63946] hover:bg-red-700 text-[#F5F5F5] py-3 px-6 rounded-full text-xl transition duration-300">
                        Soumettre
                    </a>
                </div>
            </div>

        </div>
    </main>
    <x-Footer />
@endsection


