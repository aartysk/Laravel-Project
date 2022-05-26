@extends ('dashboard')

@section ('content')

<br>
<h1>{{ $client->name }}</h1>
<br>
<p> {{ $client->email }} </p>

<a href="{{ route('Clients.index') }}">
    Back to Clients page
</a> 

@endsection