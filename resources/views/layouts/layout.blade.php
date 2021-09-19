<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>Biblioteka</title>
    <link href="css/style.css" rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <div class="grid-container">
        <div class="grid-item grid-item-1">
            <h1 class="grid1h1">Biblioteka</h1>
            <h2 class="grid1h1">Čia galite rasti knygas apie visus CSS gradient standartus</h2>
        </div>
        <div class="grid-item grid-item-2">
            <div class="bar">
                <a class="barall" href="#">Pagrindinis</a>
                <a class="barall" href="#">Autoriai</a>
                <a class="barall" href="#">Knygos</a>
                <a class="barall" href="#">Paimtos knygos</a>
                <a class="barall" href="#">Studentai</a>
                <a class="barall" href="#">Tipai</a>
            </div>
        </div>
        <div class="grid-item grid-item-3">
            @yield('content')
        </div>
    </div>
</body>
</html>
