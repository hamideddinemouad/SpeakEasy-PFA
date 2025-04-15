@extends('components.HeadersAndBody')

@section('title', 'Quiz')

@section('content')

<x-Header />

<!-- Main Content -->
<main class="container mx-auto py-16 px-4">
    <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-md p-8">
        <h1 class="text-3xl font-bold text-[#002D62] mb-6">Test de positionnement</h1>

        <!-- Question Form -->
        <form action="/quizpage/inprogress" method="POST">
            @csrf
            <p class="text-lg font-semibold text-[#002D62] mb-4">
                {{ $question['Question'] }}
            </p>

            <div class="space-y-2">
                <label class="flex items-center">
                    <input type="radio" name="answer" value="{{ $question['answers'][0]['answer'] }}" class="mr-2" required>
                    <span>{{ $question['answers'][0]['answer'] }}</span>
                </label>
                <label class="flex items-center">
                    <input type="radio" name="answer" value="{{ $question['answers'][1]['answer'] }}" class="mr-2">
                    <span>{{ $question['answers'][1]['answer'] }}</span>
                </label>
                <label class="flex items-center">
                    <input type="radio" name="answer" value="{{ $question['answers'][2]['answer'] }}" class="mr-2">
                    <span>{{ $question['answers'][2]['answer'] }}</span>
                </label>
                <label class="flex items-center">
                    <input type="radio" name="answer" value="{{ $question['answers'][3]['answer'] }}" class="mr-2">
                    <span>{{ $question['answers'][3]['answer'] }}</span>
                </label>
            </div>

            <!-- Submit Button -->
            <div class="mt-6 text-center">
                <button type="submit" class="bg-[#E63946] hover:bg-red-700 text-[#F5F5F5] py-3 px-6 rounded-full text-xl transition duration-300">
                    Soumettre
                </button>
            </div>
        </form>
    </div>
</main>

<x-Footer />

@endsection
