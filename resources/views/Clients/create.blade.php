@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="/clients/create" method="post"> 
    @csrf

   {{ __('attributes.name')}}: <input type="text" name="name" value="{{ old ('name')}}"><br>
   {{ __('attributes.email')}}: <input type="text" name="email" value="{{ old ('email')}}"><br>
    <input type="submit">
    </form>