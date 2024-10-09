<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trabajo hecho en clases</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col">
          <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">The Project</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('proyecto.index')}} ">Home</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown
                    </a>
                  </li>
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href=" {{ route('proyecto.index') }} ">Gestion de proyectos</a>
            </li>
          </ul>
        </div>
        <div class="col-5">
          <br/>
          <p class="fs-1">Registro de Proyectos</p>
          {{-- <h1>Registro de Proyectos</h1> --}}
          <br/>
          <form action ="{{route('proyecto.store')}}" method="post">
                @csrf
                @method('POST')
            <div class="input-group mb-3">
              <span class="input-group-text" id="inputGroup-sizing-sm">Titulo</span>
              <input type="text" name="titulo" id="titulo" class="form-control" aria-label="Titulo del proyecto" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
              <span class="input-group-text" id="inputGroup-sizing-default">Descripcion</span>
              <input type="text" name="descripcion" id="descripcion" class="form-control" aria-label="Descripción del proyecto" aria-describedby="inputGroup-sizing-lg">
            </div>

            {{-- <div class="input-group mb-3">
              <span class="input-group-text">Myself</span>
              <input type="text" name="myself" id="myself" class="form-control">
            </div> --}}
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>  
        </div>
        <div class="col">
          3 of 3
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </body>