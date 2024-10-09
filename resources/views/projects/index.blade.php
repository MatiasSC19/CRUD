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
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page"
                                        href=" # ">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Options
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ route('proyecto.create') }} ">Crear
                                                Proyecto</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Nothing yet</a></li>
                                    </ul>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                                </li> --}}
                            </ul>
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Busca" aria-label="Search">
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
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                {{-- aqui puede ser --}}
            </div>
            <div class="col-5">
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/Pictures/desca.jpg" class="d-block w-100" alt="Placeholder 1">
                        </div>
                        <div class="carousel-item">
                            <img src="/Pictures/ttttt.jpg" class="d-block w-100" alt="Placeholder 2">
                        </div>
                        <div class="carousel-item">
                            <img src="/Pictures/images.jpeg" class="d-block w-100" alt="Placeholder 3">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            
            <div class="col">
                {{-- aqui puede ser --}}
            </div>
        </div>
        <br />
        <div class="row">
            <div>
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        {{session('success')}}
                    </div>
                @endif
                @if (session()->has('info'))
                    <div class="alert alert-info alert-dismissible fade show">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        {{session('info')}}
                    </div>
                @endif
                @if (session()->has('error'))
                    <div class="alert alert-danger alert-dismissible fade show">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        {{session('error')}}
                    </div>
                @endif
            </div>
            <div class="col">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Accion</th>
                            <th scope="col">Proyecto</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Fecha creación</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($proyectos as $proyecto)
                            <tr>
                                <th>
                                    <a href="{{ route('proyecto.edit', ['proyecto' => $proyecto]) }}"
                                        class="btn btn-primary btn-sm">Update</a>
                                    {{-- <form action=" {{route('proyecto.destroy', ['proyecto'=>$proyecto])}} " method="post" class="d-inline"</form> --}}
                                    <form action=" {{ route('proyecto.destroy', $proyecto->id) }} " method="post"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </th>
                                <td>{{ $proyecto->titulo }}</td>
                                <td>{{ $proyecto->descripcion }}</td>
                                <td>{{ $proyecto->created_at }}</td>
                            </tr>
                        @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>