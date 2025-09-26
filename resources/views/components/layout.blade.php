<html lang="en">
    <link rel="stylesheet" href="/css/app.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja Network</title>

    @vite('resources/css/app.css')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">

</head>
<body>

    <header>
        <nav>
            <h1>Ninja Network</h1>
            <a href="/">Home</a>
            <a href="{{ route('ninjas.index') }}">All Ninjas</a>
            <a href="{{ route('ninjas.create') }}">Create Ninja</a>
        </nav> 
    </header>

    <main class="container">
        {{ $slot }}
    </main>

</body>
</html>