@extends('components.HeadersAndBody')

@section('title', 'Tableau de Bord Administrateur')

@section('content')

<x-Header />

<main class="container mx-auto py-16 px-4 grid grid-cols-1 md:grid-cols-4 gap-8">


    <aside class="bg-white rounded-lg shadow-md p-6 md:col-span-1">
        <h2 class="text-2xl font-semibold text-[#002D62] mb-6">Tableau de Bord Administrateur</h2>
        <ul class="space-y-4">
            <li data-tab-id="users" class="block px-4 py-3 rounded-lg bg-[#F5F5F5] hover:bg-[#87CEEB] text-[#002D62] transition duration-300 nav-link cursor-pointer">
                Gérer les Utilisateurs
            </li>
            <li data-tab-id="courses" class="block px-4 py-3 rounded-lg bg-[#F5F5F5] hover:bg-[#87CEEB] text-[#002D62] transition duration-300 nav-link cursor-pointer">
                Gérer les classes
            </li>
        </ul>
    </aside>

    <section class="bg-white rounded-lg shadow-md p-6 md:col-span-3 space-y-8">
        <x-Errors />
        <x-Success/>

        <div id="users" class="content-section">
            <h2 class="text-2xl font-semibold text-[#002D62] mb-4">Gérer les Utilisateurs</h2>
            <ul class="space-y-4">
                @foreach ($users as $user)
                <li class="py-4 border-b border-gray-200 last:border-b-0">
                    <div class="flex justify-between items-center">
                        <div class="flex-1">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-[#87CEEB] flex items-center justify-center text-white font-bold text-sm">
                                    {{ strtoupper(substr($user->name, 0, 1)) }}
                                </div>
                                <div>
                                    <p class="text-base font-semibold text-[#002D62]">{{ $user->name }}</p>
                                    <p class="text-sm text-gray-500">{{ $user->email }}</p>
                                </div>
                            </div>
              
                        </div>
                        
                   
                        <div class="flex items-center gap-4">
                            <span class="inline-block bg-blue-100 text-[#002D62] text-sm font-medium px-3 py-1 rounded-full">
                                Role: {{ $user->role }}
                            </span>
                            <div id="modalTrigger" data-modal-type="handleUser" data-user-id="{{ $user->id }}" class="cursor-pointer text-blue-600 hover:text-blue-800 font-medium transition duration-200 px-3 py-1 rounded-md border border-blue-100 bg-blue-50">
                                Changer de Role
                            </div>
                            <form action="/delete/user/{{ $user->id }}" method="POST" onsubmit="return confirm('vous etes sur que voulez supprimer {{$user->email}}?');">
                                @csrf
                                <button type="submit"
                                        class="bg-red-100 text-red-600 hover:bg-red-200 hover:text-red-800 font-medium px-3 py-1 rounded-md border border-red-200 transition duration-200">
                                    Delete
                                </button>
                            </form>
                            <x-gererutilisateur :professors="$professors" :user="$user"/>
                        </div>
                    </div>
                </li> 
                @endforeach
            </ul>
        </div>

    
        <div id="courses" class="content-section hidden">
            <h2 class="text-2xl font-semibold text-[#002D62] mb-4 flex justify-between items-center">
                Gérer les classes
                <x-newcourse :professors="$professors" />
                <div id="newcoursebutton" class="bg-[#87CEEB] hover:bg-[#002D62] text-[#F5F5F5] py-2 px-4 rounded transition duration-300 cursor-pointer">
                    Nouvelle classe
                </div>
            </h2>
            <p class="text-gray-600">Liste des classes :</p>
            <ul class="space-y-4">
                @foreach ($courses as $course)  
                <li class="py-4 border-b border-gray-200 last:border-b-0">
                    <div class="flex justify-between items-center gap-2">
                        <span class="font-semibold flex-1">{{ $course->title }}</span>
                        <button id="modalTriggerCourse" data-course-id="{{$course->id}}" class="cursor-pointer text-blue-600 hover:text-blue-800 font-medium transition duration-200 px-3 py-1 rounded-md border border-blue-100 bg-blue-50 whitespace-nowrap">Ajouter des étudiants</button>
                        <button id="modalTriggerkickStudents" data-course-id="{{$course->id}}" class="cursor-pointer text-blue-600 hover:text-blue-800 font-medium transition duration-200 px-3 py-1 rounded-md border border-blue-100 bg-red-50 whitespace-nowrap">Eliminer des étudiants</button>
                        <form action="/delete/course/{{ $course->id }}" method="POST" onsubmit="return confirm('vous etes sur que voulez supprimer {{$course->title}}?');">
                            @csrf
                            <button type="submit" class="bg-red-100 text-red-600 hover:bg-red-200 hover:text-red-800 font-medium px-3 py-1 rounded-md border border-red-200 transition duration-200 whitespace-nowrap">
                                Delete
                            </button>
                        </form>
                    </div>
                </li>
                <x-gererclasse :course="$course" :user="$user" :allStudents="$allStudents" />
                <x-elimineretudiants :course="$course" :user="$user" :allStudents="$allStudents" />
                @endforeach
            </ul>
        </div>
    </section>
</main>




<script>
// tabs management
function addHiddenIfNotThere(element) {
        if (!element.classList.contains("hidden")) {
            element.classList.add("hidden");
        }
    }
function showSection(elements, noHidden) {
    elements.forEach(element => {
        if (noHidden === element) {
            element.classList.remove("hidden");}
            else {
                addHiddenIfNotThere(element);}});
    }
    dataTabs = document.querySelectorAll("[data-tab-id]");
    contentSections = document.querySelectorAll(".content-section");
    dataTabs.forEach(dataTab => {
        dataTab.addEventListener("click", () => {
            showSection(contentSections, document.querySelector('#' + dataTab.dataset.tabId));
        })
    })
    // NEW COURSE MODAL 
    let newcourse = document.querySelector("#newcoursebutton");
    let closeModal = document.querySelector("#closeModal");
    // console.log(closeModal);
    let modal = document.querySelector("#myModal");

    [newcourse, closeModal].forEach(element => {
        element.addEventListener("click", () => {
                modal.classList.toggle("hidden");
        })
    });
    // handleUserModal = 
    handleModals = document.querySelectorAll("#modalTrigger");
    handleModals.forEach(modal => {
        modal.addEventListener("click", ()=>{
            // console.log("clicked" + " " + modal.dataset.modalType + " " + "user id = " + " " + modal.dataset.userId);
            document.querySelector("#handleUser" + modal.dataset.userId).classList.toggle("hidden");
            document.querySelector("#closeModalUser" + modal.dataset.userId).addEventListener("click", () => {
                document.querySelector("#handleUser" + modal.dataset.userId).classList.add("hidden");
            })
        })
    })

    handleModals = document.querySelectorAll("#modalTrigger");
    handleModals.forEach(modal => {
        modal.addEventListener("click", ()=>{
            // console.log("clicked" + " " + modal.dataset.modalType + " " + "user id = " + " " + modal.dataset.userId);
            document.querySelector("#handleUser" + modal.dataset.userId).classList.toggle("hidden");
            document.querySelector("#closeModalUser" + modal.dataset.userId).addEventListener("click", () => {
                document.querySelector("#handleUser" + modal.dataset.userId).classList.add("hidden");
            })
        })
    })

    handleModals = document.querySelectorAll("#modalTrigger");
    handleModals.forEach(modal => {
        modal.addEventListener("click", ()=>{
            // console.log("clicked" + " " + modal.dataset.modalType + " " + "user id = " + " " + modal.dataset.userId);
            document.querySelector("#handleUser" + modal.dataset.userId).classList.toggle("hidden");
            document.querySelector("#closeModalUser" + modal.dataset.userId).addEventListener("click", () => {
                document.querySelector("#handleUser" + modal.dataset.userId).classList.add("hidden");
            })
        })
    })
    
    let handleCourseModals = document.querySelectorAll("#modalTriggerCourse");
    // console.log(handleCourseModals);
    handleCourseModals.forEach(modal => {
        modal.addEventListener("click", ()=>{
            console.log(document.querySelector("#handleCourse" + modal.dataset.courseId));
            // console.log("clicked" + " " + modal.dataset.modalType + " " + "user id = " + " " + modal.dataset.userId);
            document.querySelector("#handleCourse" + modal.dataset.courseId).classList.toggle("hidden");
            document.querySelector("#closeModalCourse" + modal.dataset.courseId).addEventListener("click", () => {
                document.querySelector("#handleCourse" + modal.dataset.courseId).classList.add("hidden");
            })
        })
    })

    let handleCourseModalKick = document.querySelectorAll("#modalTriggerkickStudents");
    // console.log(handleCourseModals);
    handleCourseModalKick.forEach(modal => {
        modal.addEventListener("click", ()=>{
            console.log(document.querySelector("kickStudents" + modal.dataset.courseId));
            // console.log("clicked" + " " + modal.dataset.modalType + " " + "user id = " + " " + modal.dataset.userId);
            document.querySelector("#kickStudents" + modal.dataset.courseId).classList.toggle("hidden");
            document.querySelector("#closeModalkickStudents" + modal.dataset.courseId).addEventListener("click", () => {
                document.querySelector("#kickStudents" + modal.dataset.courseId).classList.add("hidden");
            })
        })
    })
</script>

@endsection
