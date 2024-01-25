<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Chi sono?</title>
</head>
<body style="background-color: #f2f2f2;">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Mattia's Shop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('articoli')}}">Articoli</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('chisono')}}">Chi sono?</a>
        </li>
        </li>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<h1 id="titoloH1">Chi sono?</h1>
<p id="pDescrizione">Mattia Cursi è uno studente appassionato di informatica che sta perseguendo il suo sogno di diventare <br>
   uno sviluppatore. Con dedizione e impegno, Mattia sta acquisendo le competenze e le conoscenze necessarie <br>
   per eccellere nel campo dello sviluppo software. La sua determinazione lo guida attraverso un percorso di <br>
   apprendimento continuo, spinto dalla passione per la creazione e l'innovazione nel mondo della tecnologia.</p>



    
</body>
</html>