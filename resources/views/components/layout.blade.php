<html lang="en">
    <link rel="stylesheet" href="/css/app.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja Network</title>

    @vite('resources/css/app.css')

</head>
<body>

    <header>
        <nav>
            <a href="/">Home</a>
            <a href="/ninjas">All Ninjas</a>
            <a href="/ninjas/create">Create Ninja</a>
        </nav> 
    </header>

    <main class="container">
        {{ $slot }}
    </main>

</body>
</html>