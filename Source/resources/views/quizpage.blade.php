@extends('components.HeadersAndBody')
@section('title', 'Quiz')
@section('content')

<x-Header />
    <!-- Main Content -->
    <main class="container mx-auto py-16 px-4">
        <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-md p-8">
            <h1 class="text-3xl font-bold text-[#002D62] mb-6">Test de positionnement</h1>

            <!-- Question -->
            <div id="questionContainer">
                <p class="text-lg font-semibold text-[#002D62] mb-4">$question</p>
                <div class="space-y-2">
                    <label class="flex items-center">
                        <input type="radio" name="answer" value="a" class="mr-2">
                        <span>choice1.</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="answer" value="b" class="mr-2">
                        <span>choice2</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="answer" value="c" class="mr-2">
                        <span>choice3</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="answer" value="d" class="mr-2">
                        <span>choice4</span>
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


