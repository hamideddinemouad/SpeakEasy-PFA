@extends('components.HeadersAndBody')
@section('title', 'Quiz Results')
@section('content')
    <x-Header />


    @if($level == "C2" || (isset($endquiz)&& $endquiz == 1))
    <main class="container mx-auto py-16 px-4">
        <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-md p-8 text-center">
            <h1 class="text-3xl font-bold text-green-500 mb-6">Félicitations !</h1>

            <p class="text-lg text-gray-700 opacity-75 mb-4">
                Vous avez réussi le test {{$level}} avec succès !
            </p>

            <p class="text-lg text-gray-700 opacity-75 mb-8">
               Votre niveau en Anglais est effectivement {{$level}}
            </p>

            <div class="flex justify-center">
                <a href="/" class="bg-[#002D62] hover:bg-navy-blue text-[#F5F5F5] py-3 px-6 rounded-full text-xl transition duration-300">
                    Accueil
                </a>
            </div>
        </div>
    </main>
    @else
    <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-md p-8 text-center">
        <h1 class="text-3xl font-bold text-green-500 mb-6">Félicitations !</h1>

        <p class="text-lg text-gray-700 opacity-75 mb-4">
            Vous avez réussi le test {{$level}}  avec succès !
        </p>

        <p class="text-lg text-gray-700 opacity-75 mb-8">
            
        </p>

        <div class="flex justify-center">
            <a href="/quizpage/nextlevel" class="bg-[#002D62] hover:bg-navy-blue text-[#F5F5F5] py-3 px-6 rounded-full text-xl transition duration-300">
                Continuer
            </a>
        </div>
    </div>
</main>
    @endif
  
@endsection