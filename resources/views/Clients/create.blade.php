<form action="/clients/create" method="post"> 
    @csrf

    name: <input type="text" name="name"><br>
    email: <input type="text" name="email"><br>
    <input type="submit">
    </form>