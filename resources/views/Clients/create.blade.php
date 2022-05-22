<form action="/clients/create" method="post"> 
    @csrf

    Name: <input type="text" name="name"><br>
    Email: <input type="text" name="email"><br>
    <input type="submit">
    </form>