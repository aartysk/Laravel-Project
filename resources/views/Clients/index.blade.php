<table>
    <thead>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>Actions</th>
    </thead>
    <tbody>
        @foreach($Clients as $Client)     
            <tr>
             <td> {{ $Client ->id}} </td>
             <td> {{ $Client ->name}} </td>
             <td> {{ $Client ->email}} </td>
             <td> 
                <a href="{{ route('Clients.create')}}"> Create</a>
                <a href="{{ route('Clients.show', ['client' =>$Client->id]) }}"> Show</a>
                <a href="{{ route('Clients.edit', ['client' =>$Client->id]) }}"> Edit</a>
                <a href="{{ route('Clients.delete', ['client' =>$Client->id]) }}"> Delete</a>
             </td>   
            </tr>    
        @endforeach
    </tbody>    
</table>
