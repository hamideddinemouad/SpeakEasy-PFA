@extends('components.HeadersAndBody')

@section('title', 'Quiz')

@section('content')

<x-Header />


<main class="container mx-auto py-16 px-4">
    <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-md p-8">

        <p class="text-lg text-gray-700 opacity-75 mb-8">
            Votre niveau est <span class="inline-block bg-red-100 text-red-700 font-semibold px-3 py-1 rounded-full shadow-sm">
               {{ $level }}
             </span>
        </p>
        <h2 class="text-lg text-gray-700 mb-4">{{$score}} reponse correcte sur {{$questionCount}} questions</h2>
        <h2 class="text-lg text-red-500 mb-4">Nombre d'erreurs: {{$errorsSofar}}</h2>
        {{-- @if(isset($prev))
            <h2 class="text-md text-gray-500 italic mb-4">Previous Answer: {{ $prev }}</h2>
        @else
            <h2  class="text-md text-gray-500 italic mb-4">Previous Answer: Not set</h2>
        @endif --}}

        <form action="{{route('answer.reply')}}" method="POST">
            @csrf
            <p class="text-lg font-semibold text-[#002D62] mb-4">
                {{ $question['Question'] }}
            </p>
            <div class="space-y-2">
                <label class="flex items-center">
                    <input type="radio" name="answer" value="{{$question['answers'][0]['correct']}}" class="mr-2 focus:ring-sky-blue" >
                    <span>{{ $question['answers'][0]['answer'] }}</span>
                </label>
                <label class="flex items-center">
                    <input type="radio" name="answer" value="{{$question['answers'][1]['correct']}}" class="mr-2 focus:ring-sky-blue">
                    <span>{{ $question['answers'][1]['answer'] }}</span>
                </label>
                <label class="flex items-center">
                    <input type="radio" name="answer" value="{{$question['answers'][2]['correct']}}" class="mr-2 focus:ring-sky-blue">
                    <span>{{ $question['answers'][2]['answer'] }}</span>
                </label>
                <label class="flex items-center">
                    <input type="radio" name="answer" value="{{$question['answers'][3]['correct']}}" class="mr-2 focus:ring-sky-blue">
                    <span>{{ $question['answers'][3]['answer'] }}</span>
                </label>
            </div>


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