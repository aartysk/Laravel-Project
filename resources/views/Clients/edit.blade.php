<form action="clients/edit" method="post"> 
    @csrf
    
    Name: <input type="text" name="name" value="{{ $client->name}}"><br>
    Email: <input type="text" name="email" value="{{ $client->email}}"><br>
    <input type="submit">
    </form>