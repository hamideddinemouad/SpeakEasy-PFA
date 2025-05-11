@extends('components.HeadersAndBody')

@section('title', 'Tableau de Bord Étudiant')

@section('content')

<x-Header />

    <main class="container mx-auto py-16 px-4 grid grid-cols-1 md:grid-cols-4 gap-8">


        <aside class="bg-white rounded-lg shadow-md p-6 md:col-span-1">
            <h2 class="text-2xl font-semibold text-[#002D62] mb-4">Tableau de Bord Étudiant</h2>
            <ul class="space-y-2">
                <li data-tab-id="courses" id="coursesTab" class="block px-4 py-2 rounded bg-[#F5F5F5] hover:bg-[#87CEEB] text-[#002D62] transition duration-300 nav-link" >Mes cours</li>
                <li data-tab-id="assignments" class="block px-4 py-2 rounded bg-[#F5F5F5] hover:bg-[#87CEEB] text-[#002D62] transition duration-300 nav-link">Mes Devoirs</li>
             
            </ul>
        </aside>


        <section class="bg-white rounded-lg shadow-md p-6 md:col-span-3">

            <div id="courses" class="content-section hidden">
                <h2 class="text-2xl font-semibold text-[#002D62] mb-4">Mes Cours</h2>
                <p class="text-gray-700 italic mb-2">Vos cours inscrits :</p>
                <ul>
                    @foreach($associatedCourses as $course)
                    <li class="py-2 border-b border-gray-200 last:border-b-0">
                        <div class="flex justify-between items-center">
                            <span class="text-blue-700 font-bold text-lg">{{$course->title}}</span>

                          
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>

         
            <div id="assignments" class="content-section hidden">
                <h2 class="text-2xl font-semibold text-[#002D62] mb-4">Mes Devoirs</h2>
                <p class="text-gray-700 italic mb-2">Vos cours inscrits :</p>
                <ul>
                    @foreach($associatedAssignments as $assignment)
                    <li class="py-2 border-b border-gray-200 last:border-b-0">
                        <div class="flex justify-between items-center">
                            <span class="text-blue-700 font-bold text-lg">{{$assignment->title}}</span>
                           
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>


        </section>

    </main>


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