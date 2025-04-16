@extends('components.HeadersAndBody')

@section('title', 'Quiz')

@section('content')

<x-Header />

<!-- Main Content -->
<main class="container mx-auto py-16 px-4">
    <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-md p-8">
        <h2>Level: {{$level}}</h2>
        <h1 class="text-3xl font-bold text-[#002D62] mb-6">Test de positionnement</h1>
        <h2>{{$score}} out of {{$questionCount}} questions are correct</h2>
        <h2>errors:{{$errorsSofar}}</h2>

        @if(isset($prev))
        <h2>{{ $prev }}</h2>
    @else
        <h2>$prev not set</h2>
    @endif
    
      
        <!-- Question Form -->
        <form action="{{route('answer.reply')}}" method="POST">
            @csrf
            <p class="text-lg font-semibold text-[#002D62] mb-4">
                {{ $question['Question'] }}
            </p>
            <div class="space-y-2">
                <label class="flex items-center">
                    <input type="radio" name="answer" value="{{$question['answers'][0]['correct']}}" class="mr-2" >
                    <span>{{ $question['answers'][0]['answer'] }}</span>
                </label>
                <label class="flex items-center">
                    <input type="radio" name="answer" value="{{$question['answers'][1]['correct']}}" class="mr-2">
                    <span>{{ $question['answers'][1]['answer'] }}</span>
                </label>
                <label class="flex items-center">
                    <input type="radio" name="answer" value="{{$question['answers'][2]['correct']}}" class="mr-2" >
                    <span>{{ $question['answers'][2]['answer'] }}</span>
                </label>
                <label class="flex items-center">
                    <input type="radio" name="answer" value="{{$question['answers'][3]['correct']}}" class="mr-2" >
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
