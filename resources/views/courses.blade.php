<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aulab Hackademy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <img src="https://www.filepicker.io/api/file/58noMLPRwavffNdJx8hB" width="90px" alt="">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Welcome</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/courses">Courses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Guide</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="/blog">Blog</a>
        </li>       
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- CORSI -->
<div class="container-fluid p-5 bg-warning text-center my-5">
        <row class="justify-content-center">
            <div class="col-12">
                <h1 class="display-1">Ecco i nostri corsi</h1>
            </div>
        </row>
    </div>
    <!-- CORSI -->
    <div class="container">
        <div class="row">
            @foreach($courses as $course)
                <div class="col-4">
                    <div class="card bg-warning text-center" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{$course['name']}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Corso di {{$course['age']}} mesi!</h6>
                            <p class="card-text">{{$course['description']}}</p>
                            <a href="{{route('courses-hackademy_details', ['id' => $course['id']])}}" class="btn btn-warning">Vai al corso!</a>
                        </div>
                    </div>
                </div>
            @endforeach    
    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <h2>72^ EDIZIONE AULAB HACKADEMY</h2>
                <p>Impara a programmare con il corso online Hackademy, fai il primo passo per diventare web developer ed avviare la tua nuova carriera!</p>
                <h3>INIZIO PROSSIMO CORSO:  06   MARZO   2023 </h3>
                <ul>
                    <li>
                        3 mesi di corso, per un totale di 400+ ore di formazione
                    </li>
                    <li>
                        6 mesi di servizio di accompagnamento al lavoro con career advisor
                    </li>
                    <li>
                    3 mesi di upskilling dopo il corso con 32+ ore di lezioni avanzate per aumentare le competenze
                    </li>
                    <li>
                        Garanzia Occupato o Rimborsato Under 30
                    </li>
                    <li>
                        Diploma Accredible che certifica il completamento del corso e le competenze acquisite
                    </li>
                    <li>
                        Accesso alla piattaforma recruitment ed agli eventi di talent acquisition con centinaia di aziende alla ricerca di sviluppatori
                    </li>
                    <li>
                     Supporto costante dei docenti e tutor
                    </li>
                    <li>
                        Accesso alla community aulab, con possibilità di ottenere sconti riservati
                    </li>
                    <li>
                        40+ ore di materiale didattico on demand sempre a disposizione
                    </li>
                    <li>
                        Soddisfatto o ripreparato
                    </li>
                </ul>
            </div>
            <div class="col-12 col-md-6 my-5">
                <img src="https://www.bergamonews.it/photogallery_new/images/2020/03/hackademy-671755.jpg" width="500px" alt="">
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
