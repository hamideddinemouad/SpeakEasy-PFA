@extends('components.HeadersAndBody')

@section('title', 'Tableau de Bord Administrateur')

@section('content')

<x-Header/>


<div id="myModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">

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


    <main class="container mx-auto py-16 px-4 grid grid-cols-1 md:grid-cols-4 gap-8">

        <aside class="bg-white rounded-lg shadow-md p-6 md:col-span-1">
            <h2 class="text-2xl font-semibold text-[#002D62] mb-4">Tableau de Bord Enseignant</h2>
            <ul class="space-y-2">
                <li href="#" data-tab-id="courses" class="block px-4 py-2 rounded bg-[#F5F5F5] hover:bg-[#87CEEB] text-[#002D62] transition duration-300 nav-link">Gérer mes Cours</li>
               <li href="#" data-tab-id="assignments" class="block px-4 py-2 rounded bg-[#F5F5F5] hover:bg-[#87CEEB] text-[#002D62] transition duration-300 nav-link">Gérer les Devoirs</li>
               <li href="#" data-tab-id="students" class="block px-4 py-2 rounded bg-[#F5F5F5] hover:bg-[#87CEEB] text-[#002D62] transition duration-300 nav-link">Voir mes Étudiants</li>
            </ul>
        </aside>

        <section class="bg-white rounded-lg shadow-md p-6 md:col-span-3">
            <x-Success/>
       
            <x-Errors />
            <div id="courses" class="content-section">
                <h2 class="text-2xl font-semibold text-[#002D62] mb-4">Gérer mes Cours</h2>
                <ul class="bg-white max-w-xl mx-auto rounded-xl shadow-lg overflow-hidden divide-y divide-gray-200">
                    @foreach($courses as $course)
                        <li class="px-6 py-5 hover:bg-gray-50 transition duration-150 ease-in-out">
                            <div class="flex justify-between items-center">
                                <span class="text-xl font-medium text-gray-900 tracking-tight leading-snug">
                                    {{ $course->title }}
                                </span>
                               
                            </div>
                        </li>
                    @endforeach
                </ul>
                    
            
                </ul>
            </div>

        

            <div id="assignments" class="content-section hidden">
                <button id="modalTrigger" data-modal-id="CreateAssignmentModal" type="button" class="mt-4 mx-auto block bg-[#87CEEB] hover:bg-[#002D62] text-[#F5F5F5] py-2 px-4 rounded transition duration-300 cursor-pointer bg-blue-600">
                    Creer un devoir
                </button>
                <x-teacherForms.creerDevoir />
                <h2 class="text-2xl font-semibold text-[#002D62] mb-4">Gérer les Devoirs</h2>
                <ul class="bg-white max-w-xl mx-auto rounded-xl shadow-lg overflow-hidden divide-y divide-gray-200">

                   
                    @foreach($assignments as $assignment)
                    {{-- {{dd()}} --}}
                        <li class="px-6 py-5 hover:bg-gray-50 transition duration-150 ease-in-out">
                            <div class="flex justify-between items-center">
                                <span class="text-xl font-medium text-gray-900 tracking-tight leading-snug">
                                    {{ $assignment->title }}
                                </span>
                                <div class="flex gap-2"> 
                                    <button id="modalTrigger" 
                                            data-modal-id="{{$assignment->title}}"
                                            class="bg-blue-600 hover:bg-[#002D62] text-[#F5F5F5] py-2 px-4 rounded transition duration-300 text-sm">
                                        Assigner 
                                    </button>
                                    <a href="/delete/assignment/{{$assignment->id}}" 
                                       class="bg-red-600 hover:bg-[#002D62] text-[#F5F5F5] py-2 px-4 rounded transition duration-300 text-sm">
                                        Supprimer
                                    </a>
                                </div>
                            </div>
                            <x-teacherForms.assign :assignment="$assignment" :studentsObjects="$studentsObjects"/>
                        </li>
                    @endforeach
                </ul>
            </div>


            <div id="students" class="content-section hidden">
                <h2 class="text-2xl font-semibold text-[#002D62] mb-4">Voir mes Étudiants</h2>
                <ul class="bg-white max-w-xl mx-auto rounded-xl shadow-lg overflow-hidden divide-y divide-gray-200">
                    @foreach($students as $student)
                        <li class="px-6 py-5 hover:bg-gray-50 transition duration-150 ease-in-out">
                            <div class="flex justify-between items-center">
                                <span class="text-xl font-medium text-gray-900 tracking-tight leading-snug">
                                    {{$student}}
                                </span>
                               
                            </div>
                        </li>
                    @endforeach
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