@extends('components.HeadersAndBody')

@section('title', 'Tableau de Bord Étudiant')

@section('content')

<x-Header />

    <!-- Main Content -->
    <main class="container mx-auto py-16 px-4 grid grid-cols-1 md:grid-cols-4 gap-8">

        <!-- Aside Navigation -->
        <aside class="bg-white rounded-lg shadow-md p-6 md:col-span-1">
            <h2 class="text-2xl font-semibold text-[#002D62] mb-4">Tableau de Bord Étudiant</h2>
            <ul class="space-y-2">
                <li data-tab-id="courses" id="coursesTab" class="block px-4 py-2 rounded bg-[#F5F5F5] hover:bg-[#87CEEB] text-[#002D62] transition duration-300 nav-link" >Mes cours</li>
                <li data-tab-id="assignments" class="block px-4 py-2 rounded bg-[#F5F5F5] hover:bg-[#87CEEB] text-[#002D62] transition duration-300 nav-link">Mes Devoirs</li>
                <li data-tab-id="grades" id="gradesTab"class="block px-4 py-2 rounded bg-[#F5F5F5] hover:bg-[#87CEEB] text-[#002D62] transition duration-300 nav-link">Mes Notes</li>
            </ul>
        </aside>

        <!-- Main Content Area -->
        <section class="bg-white rounded-lg shadow-md p-6 md:col-span-3">

            <!-- My Courses Content -->
            <div id="courses" class="content-section hidden">
                <h2 class="text-2xl font-semibold text-[#002D62] mb-4">Mes Cours</h2>
                <p>Vos cours inscrits :</p>
                <ul>
                    <li class="py-2 border-b border-gray-200 last:border-b-0">
                        <div class="flex justify-between items-center">
                            <span>Français Débutant (A1)</span>
                            <a href="/student/courses/french101" class="text-[#002D62] hover:text-blue-700">Voir le Cours</a>
                        </div>
                    </li>
                    <li class="py-2 border-b border-gray-200 last:border-b-0">
                        <div class="flex justify-between items-center">
                            <span>Anglais Intermédiaire (B1)</span>
                            <a href="/student/courses/english201" class="text-[#002D62] hover:text-blue-700">Voir le Cours</a>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- My Assignments Content -->
            <div id="assignments" class="content-section hidden">
                <h2 class="text-2xl font-semibold text-[#002D62] mb-4">Mes Devoirs</h2>
                <p>Devoirs à compléter :</p>
                <ul>
                    <li class="py-2 border-b border-gray-200 last:border-b-0">
                        <div class="flex justify-between items-center">
                            <span>[Français A1] - Vocabulaire (Date Limite: 2025-01-15)</span>
                            <a href="/student/assignments/vocab" class="text-[#002D62] hover:text-blue-700">Faire le Devoir</a>
                        </div>
                    </li>
                    <li class="py-2 border-b border-gray-200 last:border-b-0">
                        <div class="flex justify-between items-center">
                            <span>[Anglais B1] - Lecture (Date Limite: 2025-01-20)</span>
                            <a href="/student/assignments/reading" class="text-[#002D62] hover:text-blue-700">Faire le Devoir</a>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- My Grades Content -->
            <div id="grades" class="content-section hidden">
                <h2 class="text-2xl font-semibold text-[#002D62] mb-4">Mes Notes</h2>
                <p>Vos dernières notes :</p>
                <ul>
                    <li class="py-2 border-b border-gray-200 last:border-b-0">
                        <div class="flex justify-between items-center">
                            <span>[Français A1] - Vocabulaire: 18/20</span>
                            <span>[Date]</span>
                        </div>
                    </li>
                    <li class="py-2 border-b border-gray-200 last:border-b-0">
                        <div class="flex justify-between items-center">
                            <span>[Anglais B1] - Lecture: 15/20</span>
                            <span>[Date]</span>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

    </main>

    <x-Footer />

    <script>
        // links = document.querySelectorAll('.content-section');
        // links.forEach(link => console.log(link));
    </script>

<script>
    function addHiddenIfNotThere(element){
        if (!element.classList.contains("hidden")){
            element.classList.add("hidden");
        }
    }
    function showSection(elements, noHidden)
    {
        // console.log(elements);
        elements.forEach (element => 
        {
            if (noHidden === element){
                element.classList.remove("hidden");
            }
            else{
                addHiddenIfNotThere(element);
            }
        })
    };
    dataTabs = document.querySelectorAll("[data-tab-id]");
    contentSections = document.querySelectorAll(".content-section");
    dataTabs.forEach(dataTab =>{

        dataTab.addEventListener("click" , () => {

            showSection(contentSections,  document.querySelector('#' + dataTab.dataset.tabId));

        })
    })
    </script>
@endsection