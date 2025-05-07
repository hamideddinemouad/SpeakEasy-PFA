<div id="{{$assignment->title}}" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
  <div class="bg-white p-6 rounded-2xl shadow-2xl w-full max-w-md relative">

      <button id="closeModalTrigger" data-modal-id="{{$assignment->title}}" class="absolute top-4 right-4 text-gray-500 hover:text-blue-600 transition-colors">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
          </svg>
      </button>
      <h2 class="text-2xl font-bold text-slate-800 mb-6">
    assignement du devoir 
    <span class="text-blue-600 underline italic">{{$assignment->title}}</span>
</h2>
      <form action="/assign/{{$assignment->id}}" method="post" class="space-y-6">
          @csrf
          @foreach ($studentsObjects as $student)
          @if(!$assignment->assigned->contains($student->id))
          <label class="flex items-center space-x-3">
            {{-- {{$student->id}} was in value --}}
            <input type="checkbox" name="assigntoTheseStudents[]" value="{{$student->id}}" class="w-5 h-5 text-blue-600 border-gray-300 rounded focus:ring-2 focus:ring-blue-500 transition duration-150 ease-in-out">
            <span class="text-gray-700">{{$student->email}}</span>
          </label>
          @endif
          @endforeach

          <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
            Assigner
        </button>
      </form>
  </div>
</div>