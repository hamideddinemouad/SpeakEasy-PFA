<div id="handleUser{{$user->id}}" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
  <div class="bg-white p-6 rounded-2xl shadow-2xl w-full max-w-md relative">
      <!-- Close Button Improvement -->
      <button id="closeModalUser{{$user->id}}" class="absolute top-4 right-4 text-gray-500 hover:text-blue-600 transition-colors">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
          </svg>
      </button>
      
      <h2 class="text-2xl font-bold text-slate-800 mb-6">Changer Role</h2>
      <form action="/changeRole/{{$user->id}}" method="post" class="space-y-6">
          @csrf
          <!-- Select Dropdown Styling -->
          <div>
              <label class="block text-sm font-medium text-slate-700 mb-2">Changement de role de l'utilisateur: 
                <span class="inline-block bg-red-100 text-red-700 font-semibold px-3 py-1 rounded-full shadow-sm"> {{$user->name}}</span> du role: 
                <span class="inline-block bg-red-100 text-red-700 font-semibold px-3 py-1 rounded-full shadow-sm"> {{$user->role}}</span>au role : </label>
              <select id="role" name="role" 
                      class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white">
                      {{-- drop down role to change --}}
                      @php
                          $roles = ['student', 'teacher', 'parent', 'admin'];
                      @endphp
                  @foreach($roles as $role)
                  @if ($role != $user->role)
                    <option value="{{$role}}">{{$role}}</option>
                  @endif
                  @endforeach
              </select>
          </div>

          <!-- Submit Button Styling -->
          <div class="flex justify-end gap-3">
              <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                  Enregistrer
              </button>
          </div>
      </form>
  </div>
</div>