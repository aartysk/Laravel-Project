@extends('dashboard');

@section('content')

    <form action="/clients/edit/{{$client->id}}" method="post"> 
        @csrf
        
        {{ __('attributes.name')}}: <input type="text" name="name" value="{{ $client->name}}"><br>
        {{ __('attributes.email')}}: <input type="text" name="email" value="{{ $client->email}}"><br>
        <input type="submit">
        </form>
@endsection