<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>E-Jodoh</title>
</head>

<body>
    @if(Auth::check())
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/user">E-Jodoh</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/user">User Information</a>
                    </li>
                    @if(Auth::check() && Auth::User()->role == 'Customer')
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/cariJodoh/{{Auth::user()->gender}}">Cari Jodoh</a>
                    </li>
                    @elseif(Auth::check() && Auth::User()->role == 'Admin')
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/manageUser">Manage User</a>
                    </li>

                    @endif


                </ul>
                @yield('logout')
                

            </div>
        </div>
    </nav>


    <div style="height: 90vh">
        @yield('content')
    </div>

    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <span>© 2021 E-Jodoh</span>
            </div>


        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    @endif


</body>

</html>