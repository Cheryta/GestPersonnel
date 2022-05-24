<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>GestPersonnel</title>
</head>
<body>
    <div class="container-fluid p-4 bg-info" >
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('/')}}">ACCUEIL</a>
            </li> &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('formulaire') }}">FORMULAIRE</a>
            </li> &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('liste') }}">LISTE</a>
            </li>  &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
            <li class="nav-item">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
            </li>
        </ul>
    </div>
    <div class="container-fluid">
        @yield("contenu")
    </div>
    <footer>
        <div class="container-fluid p-3 bg-info text-light text-center">
            <p> Copyright@2022-GestPersonnel</p>
        </div>
    </footer>

    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>
