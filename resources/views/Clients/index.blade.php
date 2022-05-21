<table>
    <thead>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>Actions</th>
    </thead>
    <tbody>
        @foreach($clients as $client)     
            <tr>
             <td> {{ $client ->id}} </td>
             <td> {{ $client ->name}} </td>
             <td> {{ $client ->email}} </td>
             <td> 
                <a href="{{ route('clients.create')}}"> Create</a>
                <a href="{{ route('clients.show', ['client' =>$client->id]) }}"> Show</a>
                <a href="{{ route('clients.create', ['client' =>$client->id]) }}"> Edit</a>
                <a href="{{ route('clients.create', ['client' =>$client->id]) }}"> Delete</a>
             </td>   
            </tr>    
        @endforeach
    </tbody>    
</table>
