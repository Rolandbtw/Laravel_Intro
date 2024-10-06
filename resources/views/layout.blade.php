<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Eszközök listája</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{route('aitools.index')}}">AI eszközök</a></li>
                <li><a href="{{route('categories.index')}}">Kategóriák</a></li>
                <li><a href="{{route('categories.create')}}">Új kategória</a></li>
                <li><a href="{{route('tags.create')}}">Új címke</a></li>
                
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>© 2023 WebMania.cc</p>
    </footer>
</body>

</html>