<div id="CreateAssignmentModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
  <div class="bg-white p-6 rounded-2xl shadow-2xl w-full max-w-md relative">

      <button id="closeModalTrigger" data-modal-id="CreateAssignmentModal" class="absolute top-4 right-4 text-gray-500 hover:text-blue-600 transition-colors">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
          </svg>
      </button>
      <h2 class="text-2xl font-bold text-slate-800 mb-6">Créer un nouveau devoir</h2>
      <form action="/create/assignment" method="post" class="space-y-6">
          @csrf
      
          <div>
              <label class="block text-sm font-medium text-slate-700 mb-2">Titre du devoir</label>
              <input id="title" name="title" type="text" 
                     class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
          </div>

          <div>
              <label class="block text-sm font-medium text-slate-700 mb-2">Description</label>
              <textarea id="description" name="description" rows="3"
                        class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"></textarea>
          </div>

          <div class="flex justify-end gap-3">
              <button type="button" id="cancelModal" class="px-4 py-2 text-slate-600 hover:bg-slate-100 rounded-lg">
                  Annuler
              </button>
              <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                  Créer
              </button>
          </div>
      </form>
  </div>
</div>