<style>
    body {
        font-family: 'Poppins', sans-serif;
    }


    .nav-link {
        text-decoration: none;
        color: black;
        position: relative;
        padding-bottom: 1px;
        transition: color 0.3s, border-bottom 0.1s ease;
    }

    .nav-link.active {
        border-bottom: 3px solid black;
        font-weight: bold;
    }

    .nav-link:hover {
        color: gray;
    }

    .donate-button {
        background-color: #C6D1AF;
        border: 1px solid black;
        border-radius: 50px;
        width: 180px;
    }

    .donate-button:hover {
        background-color: #C6D1AF;
        border: 1px solid black;
        box-shadow: 2px 4px 6px rgba(168, 168, 168, 0.9);
    }

    .dnt-btn a{
        border: none
    }

    .donate-button.active{
        background-color: white;
    }

    .donate-button span {
        color: #0F4235;
    }
</style>

<nav class="navbar navbar-expand-lg bg-body-tertiary ms-5 me-5 mt-4 py-3 d-flex justify-content-center"
    style="border: 1px solid black;
        border-radius: 50px;
        box-shadow: 4px 4px 6px rgba(0, 0, 0, 0.2), -4px 4px 6px rgba(0, 0, 0, 0.2);">
    <div class="container-fluid ps-5 pe-5">
        <a href="{{ url('/') }}">
            <img src="{{ asset('image/LOGO.png') }}" style="height: 50px" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0 gap-4">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }} fs-5" aria-current="page"
                        href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('about') ? 'active' : '' }} fs-5" aria-current="page"
                        href="{{ url('/about') }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('news') ? 'active' : '' }} fs-5" aria-current="page"
                        href="{{ url('/news') }}">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('volunteers') ? 'active' : '' }} fs-5" aria-current="page"
                        href="{{ url('/volunteers') }}">Volunteers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('beneficiaries') ? 'active' : '' }} fs-5" aria-current="page"
                        href="{{ url('/beneficiaries') }}">Beneficiaries</a>
                </li>
            </ul>

            <div class="btn donate-button my-1 {{ Request::is('donate') ? 'active' : '' }}">
                <div class="dnt-btn d-flex justify-content-center align-items-center">
                    <a href="{{ url('/donate') }}" class="btn fs-5 fw-bolder">Donate</a>
                    <img class="ms-3" src="{{ asset('image/ScrollUp.png') }}" alt="">
                </div>
            </div>

        </div>
    </div>
</nav>
