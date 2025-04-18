<h2>Level: {{$level}}</h2>
<h1 class="text-3xl font-bold text-[#002D62] mb-6">Test de positionnement</h1>
<h2>{{$score}} out of {{$questionCount}} questions are correct</h2>
<h2>errors:{{$errorsSofar}}</h2>

@if(isset($prev))
<h2>{{ $prev }}</h2>
@else
<h2>$prev not set</h2>
@endif