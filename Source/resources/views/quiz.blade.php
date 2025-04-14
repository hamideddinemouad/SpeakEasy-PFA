@extends('components.HeadersAndBody')
@section('title', 'Quiz')
@section('content')
    <x-Header />

    <!-- Main Content -->
    <main class="container mx-auto py-16 px-4">
        <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-md p-8 text-center">
            <h1 class="text-3xl font-bold text-[#002D62] mb-6">Test de positionnement en anglais</h1>

            <p class="text-lg text-gray-700 opacity-75 mb-4">
                Bienvenue au test de positionnement d'anglais de SpeakEasy Academy ! Ce test gratuit vous aidera à évaluer votre niveau d'anglais et à déterminer le cours qui vous convient le mieux.
            </p>

            <p class="text-lg text-gray-700 opacity-75 mb-6">
                Avant de commencer, veuillez sélectionner la langue dans laquelle vous souhaitez être testé(e), puis choisissez le niveau qui correspond à vos compétences :
            </p>

            <!-- Level Selection Form -->
            <form action="/quiz" method="POST">
                @csrf
                <div class="mb-6 text-left">
                    <label class="block mb-2 font-semibold">Langue :</label>
                    <input type="radio" id="francais" name="language" value="French">
                    <label for="francais">Français</label><br>
                    <input type="radio" id="anglais" name="language" value="English">
                    <label for="anglais">Anglais</label>
                </div>

                <div class="mb-8 text-left">
                    <label for="level" class="block mb-2 font-semibold">Niveau :</label>
                    <select name="level" id="level" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option value="A1">Débutant (A1)</option>
                        <option value="A2">Élémentaire (A2)</option>
                        <option value="B1">Intermédiaire (B1)</option>
                        <option value="B2">Intermédiaire Avancé (B2)</option>
                        <option value="C1">Avancé (C1)</option>
                        <option value="C2">Expérimenté (C2)</option>
                    </select>
                </div>

                <p class="text-lg text-gray-700 opacity-75 mb-8">
                    Le test est composé de questions à choix multiples et dure environ 15 minutes. Prenez votre temps et répondez honnêtement pour obtenir une évaluation précise.
                </p>

                <div class="flex justify-center space-x-4">
                    <button type="submit" class="bg-[#E63946] hover:bg-red-700 text-[#F5F5F5] py-3 px-6 rounded-full text-xl transition duration-300">
                        Commencer le Quiz
                    </button>
                    <a href="/" class="bg-gray-300 hover:bg-gray-400 text-gray-700 py-3 px-6 rounded-full text-xl transition duration-300">
                        Retour à l'accueil
                    </a>
                </div>
            <x-Errors />
            </form>
        </div>
    </main>

    <x-Footer />
@endsection
