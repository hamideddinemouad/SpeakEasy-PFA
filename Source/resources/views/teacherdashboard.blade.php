@extends('components.HeadersAndBody')

@section('title', 'Tableau de Bord Administrateur')

@section('content')

<x-Header />
<div id="myModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
    <!-- Modal content -->
    <div class="bg-white p-6 rounded-2xl shadow-2xl w-full max-w-md">
      <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-bold">Gérer</h2>
        <button id="closeModal" class="text-gray-500 hover:text-red-500">&times;</button>
      </div>
      <form action="" method="post">
        @csrf
        <div class="flex justify-end">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Confirm</button>
        </div>
      </form>
    </div>
  </div>

    <!-- Main Content -->
    <main class="container mx-auto py-16 px-4 grid grid-cols-1 md:grid-cols-4 gap-8">

        <!-- Aside Navigation -->
        <aside class="bg-white rounded-lg shadow-md p-6 md:col-span-1">
            <h2 class="text-2xl font-semibold text-[#002D62] mb-4">Tableau de Bord Enseignant</h2>
            <ul class="space-y-2">
                <li href="#" data-tab-id="courses" class="block px-4 py-2 rounded bg-[#F5F5F5] hover:bg-[#87CEEB] text-[#002D62] transition duration-300 nav-link">Gérer mes Cours</li>
               <li href="#" data-tab-id="assignments" class="block px-4 py-2 rounded bg-[#F5F5F5] hover:bg-[#87CEEB] text-[#002D62] transition duration-300 nav-link">Gérer les Devoirs</li>
               <li href="#" data-tab-id="students" class="block px-4 py-2 rounded bg-[#F5F5F5] hover:bg-[#87CEEB] text-[#002D62] transition duration-300 nav-link">Voir mes Étudiants</li>
            </ul>
        </aside>

        <!-- Main Content Area -->
        <section class="bg-white rounded-lg shadow-md p-6 md:col-span-3">
            <!-- Manage Courses Content -->
            <div id="courses" class="content-section">
                <h2 class="text-2xl font-semibold text-[#002D62] mb-4">Gérer mes Cours</h2>
                <ul>
                    <li class="py-2 border-b border-gray-200 last:border-b-0">
                        <div class="flex justify-between items-center">
                            <span>Français Débutant (A1)</span>
                            <a href="/teacher/courses/french101" class="text-[#002D62] hover:text-blue-700">Gérer</a>
                        </div>
                    </li>
                    <li class="py-2 border-b border-gray-200 last:border-b-0">
                         <div class="flex justify-between items-center">
                            <span>Anglais Intermédiaire (B1)</span>
                            <a href="/teacher/courses/english201" class="text-[#002D62] hover:text-blue-700">Gérer</a>
                        </div>
                    </li>
                </ul>
            </div>

            
            <!-- Manage Assignments Coadentent -->
            <div id="assignments" class="content-section hidden">
                <x-teacherForms.creerDevoir />
                <h2 class="text-2xl font-semibold text-[#002D62] mb-4">Gérer les Devoirs</h2>
                <ul>
                    <button id="modalTrigger" data-modal-id="CreateAssignementModal"> creer devoir </button>
                    <li class="py-2 border-b border-gray-200 last:border-b-0">
                        <div class="flex justify-between items-center">
                            <span>[Français A1] - Vocabulaire (7/15 complétés)</span>
                            <a href="/teacher/assignments/vocab" class="text-[#002D62] hover:text-blue-700">Voir/Noter</a>
                        </div>
                    </li>
                    <li class="py-2 border-b border-gray-200 last:border-b-0">
                        <div class="flex justify-between items-center">
                            <span>[Anglais B1] - Lecture (10/15 complétés)</span>
                            <a href="/teacher/assignments/reading" class="text-[#002D62] hover:text-blue-700">Voir/Noter</a>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Manage Students Content -->
            <div id="students" class="content-section hidden">
                <h2 class="text-2xl font-semibold text-[#002D62] mb-4">Voir mes Étudiants</h2>
                <ul>
                    <li class="py-2 border-b border-gray-200 last:border-b-0">
                        <div class="flex justify-between items-center">
                            <span>Fatima Zahra El Mansouri (Français A1)</span>
                            <a href="/teacher/students/fatima" class="text-[#002D62] hover:text-blue-700">Gérer</a>
                        </div>
                    </li>
                    <li class="py-2 border-b border-gray-200 last:border-b-0">
                        <div class="flex justify-between items-center">
                            <span>Youssef Kadmiri (Anglais B1)</span>
                            <a href="/teacher/students/youssef" class="text-[#002D62] hover:text-blue-700">Gérer</a>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

    </main>

    <x-Footer />
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

    let modalTriggers = document.querySelectorAll("#modalTrigger");
    modalTriggers.forEach(modal => 
        modal.addEventListener("click", () =>{
            // console.log(modal);
            document.querySelector("#" + modal.dataset.modalId).classList.remove("hidden");
        })
    )
    let closeModalTriggers = document.querySelectorAll('#closeModalTrigger');
    closeModalTriggers.forEach(modal => 
        modal.addEventListener("click", () =>{
            // console.log(modal);
            document.querySelector("#" + modal.dataset.modalId).classList.add("hidden");
        })
    )
    </script>

@endsection