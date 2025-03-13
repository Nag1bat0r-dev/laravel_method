<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Methods</title>
</head>
<body>
    <h1>Laravel Methods</h1>


    <form action="/form" method="GET">
        <input type="text" name="name" placeholder="Ismingiz">
        <input type="text" name="email" placeholder="Email">
        <button type="submit">GET Request</button>
    </form>

    <form action="/form" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Ismingizni tasdiqlang">
        <input type="text" name="email" placeholder="Emailingizni tasdiqlang">
        <button type="submit">POST Request</button>
    </form>

    <form action="/form" method="POST">
        @csrf
        @method('DELETE')
        <input type="text" name="id" placeholder="IDnigizni kiriting">
        <button type="submit">DESTROY Request</button>
    </form>

    <form action="/form" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" placeholder="Yangi ismingiz">
        <input type="text" name="email" placeholder="Yangi email">
        <button type="submit">PUT Request</button>
    </form>

    <form action="/form" method="POST">
        @csrf
        @method('PATCH')
        <input type="text" name="name" placeholder="Yangi ismingiz">
        <button type="submit">PATCH Request</button>
    </form>
</body>
</html>
