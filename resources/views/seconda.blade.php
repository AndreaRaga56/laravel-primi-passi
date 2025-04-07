<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Seconda Pagina</title>
</head>
<body>
    <nav>
        <p><a href="{{ route('HomePage') }}">HomePage</a></p>
        <p><a href="{{ route('2') }}">Seconda Pagina</a></p>
        <p><a href="{{ route('3') }}">Terza pagina</a></p>
    </nav>
    <h1>Ciao sono la {{ $nomePagina }}</h1>
    <p>Paperino</p>
</body>
</html>
