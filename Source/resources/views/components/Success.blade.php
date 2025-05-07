@if(session('success'))
    <div class="p-3">
        <div class="error bg-green-100 text-green-800 border border-green-400 rounded p-3 mb-3">
            {{session('success')}}
        </div>
    </div>
@endif
