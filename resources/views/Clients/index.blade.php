@extends('dashboard')

@section ('content')

<div class="mx-12">
    <div class="create-button-container">
    <a class="bg-green-400 text-white p-2 m-2" href="{{ route('Clients.create') }}">
    Create
    </a>
    </div>

    <table class="mt-10">
        <thead class="bg-white">
            <th class="p-2">id</th>
            <th class="p-2">name</th>
            <th class="p-2">email</th>
            <th class="p-2">Actions</th>
        </thead>
        <tbody>
            @foreach($Clients as $Client)     
                <tr class="bg-white border-2 m-3 border-solid border-red-400">
                        <td> {{ $Client ->id}} </td>
                        <td> {{ $Client ->name}} </td>
                        <td> {{ $Client ->email}} </td>
                    <td> 
                        <a class="bg-blue-500 p-2 m-1" href="{{ route('Clients.show', ['client' =>$Client->id]) }}"> Show</a>
                        <a class="bg-orange-500 p-2 m-1" href="{{ route('Clients.edit', ['client' =>$Client->id]) }}"> Edit</a>
                        <a class="bg-red-500 p-2 m-1" href="{{ route('Clients.delete', ['client' =>$Client->id]) }}"> Delete</a>
                    </td>   
                </tr>    
            @endforeach
        </tbody>    
    </table>
</div>
@endsection