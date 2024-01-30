<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="style.css">
    @vite(['resources/css/app.css'])
</head>

<body>

    <nav class="navbar">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}">Mattia's Shop</a>
            <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">&#9776;</span>
            </button>
            <div class="navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('articoli')}}">Articoli</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('chisono')}}">Chi sono?</a>
                    </li>
                </ul>
                <form class="search-form">
                    <input class="search-input" type="search" placeholder="Search" aria-label="Search">
                    <button class="search-button" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    

    <script src="script.js"></script>
</body>

</html>
