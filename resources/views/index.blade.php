@extends('layouts.template')

@section('content')

    @foreach($clients as $client)

        <div class="client">
            <a href="/show/{{$client->id}}">
            <h2> {{ $client->name }} </h2>
            </a>
            <span> {{ $client->email }} </span>
            <span> {{ $client->comments()->count() }} </span>
        </div>
        
    @endforeach


@endsection