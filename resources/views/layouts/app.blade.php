<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" type="image/svg" href="{{ asset('assets/images/iconLogo.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container-fluid h-100 g-0">
        <header>
            <nav class='navbar navbar-expand-lg'>
                <div class='container-fluid'>
                    <div class='logo col-2'>
                        <a class='navbar-brand' href='/'>
                            <img src="{{ asset('assets/images/navLogo.png') }}" class='img-fluid p-1' width='125'>
                        </a>
                    </div>
                    <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNavAltMarkup' aria-controls='navbarNavAltMarkup' aria-expanded='false' aria-label='Toggle navigation'>
                        <i class='fa fa-bars'></i>
                    </button>
                    <div class='collapse navbar-collapse align-items-center justify-content-around' id='navbarNavAltMarkup'>
                        <div class='navbar-nav text-nowrap col-12 text-center'>
                            <div class='container-fluid'>
                                <a class='nav-link' aria-current='page' href='/'>HOME</a>
                            </div>
                            <div class='container-fluid'>
                                <li class="nav-item dropdown">
                                    <button class="dropdown-btn-perso mx-auto" role="button" data-bs-toggle="dropdown">
                                        <span class="nav-link">SERVICES</span>
                                        <span class="arrow"></span>
                                    </button>
                                    <ul class="dropdown-menu text-center mx-auto">
                                        <li><a class="dropdown-item" href="/akashic-records-reading">Akashic Records Reading</a></li>
                                        <li><a class="dropdown-item" href="/space-healing">Space Healing</a></li>
                                        <li><a class="dropdown-item" href="/higher-self-reading">Higher Self Reading</a></li>
                                        <li><a class="dropdown-item" href="/tarot-card-reading">Tarot Card Reading</a></li>
                                        <li><a class="dropdown-item" href="/shamanic-reading">Shamanic Reading</a></li>
                                        <li><a class="dropdown-item" href="/seven-energy-crescent-reading">Seven Energy Crescent Reading</a></li>
                                        <li><a class="dropdown-item" href="/chakra-reading-and-healing">Chakra Reading and Healing</a></li>
                                    </ul>
                                </li>
                            </div>
                            <div class='container-fluid'>
                                <a class='nav-link' href='/about'>ABOUT</a>
                            </div>
                            <div class='container-fluid'>
                                <a class='nav-link' href='/contact'>CONTACT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

@yield('content')

        <footer>
            <div class="row p-1 g-0">
                <div class="text-center fw-bold">©Copyright Hannah 2024</div>
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>