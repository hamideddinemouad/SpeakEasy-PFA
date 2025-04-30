<div class="p-3">
@foreach ($errors->all() as $error)

    <div class="error bg-red-100 text-red-800 border border-red-400 rounded p-3 mb-3">
        {{ $error }}
    </div>
@endforeach
</div>