@extends ('dashboard')

@section ('content')

    <style>
        * {
            margin: 0;
            padding: 0;
        }


    </style>

    <br>
    <h1>{{ $client->name }}</h1>
    <br>
    <p> {{ $client->email }} </p>
    <br>

    @foreach ($client->comments as $comment)
        <div class="comment">
            <h4> {{$comment->author}} </h4>
            <p> {{$comment->body}} </p>
    @endforeach
        

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/comments/store" method="POST">
        @csrf
        <div class="form-input">
            <input type="text" placeholder="Author name" name="author">
        </div>
        <div class="form-input">
            <textarea name="body" placeholder="Comment body"> </textarea>
        </div>
        <input type="hidden" value={{ $client->id }} name="commentable_id">
        <input type="hidden" value={{ get_class($client) }} name="commentable_type">
        <br>
        <input type="submit">

    </form>


    <a href="{{ route('Clients.index') }}">
        Back to Clients page
    </a> 

@endsection