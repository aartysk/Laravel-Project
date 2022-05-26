@extends ('dashboard')

@section ('content')

<br>
<h1>{{ $client->name }}</h1>
<br>
<p> {{ $client->email }} </p>
<br>

<form action="/comments/store" method="POST">
    @csrf
    <div class="form-input">
        <input type="text" placeholder="Author name" name="author">
    </div>
    <div class="form-input">
        <textarea name="body" placeholder="Comment body"> </textarea>
    </div>
    <input type="hidden" value={{ $client->id }}>
    <br>
    <input type="submit">

</form>


<a href="{{ route('Clients.index') }}">
    Back to Clients page
</a> 

@endsection