<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Save The Meal | News</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900;1000&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style/news.css') }}">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    {{-- Start of Navbar Section --}}
    <x-navbar />
    {{-- End of Navbar Section --}}

    {{-- Start of Carousel Section --}}
    <div id="carouselExampleInterval" class="carousel slide mt-4" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            {{-- Carousel 1 --}}
            <div class="carousel-item active" data-bs-interval="7000">
                <img src="{{ asset('image/carousel1.png') }}" class="d-block w-100" style="object-fit: contain">
                <div class="card-img-overlay">
                    <div class="text-card d-flex flex-column">
                        <p class="ms-4 py-2 px-4 border-dark"
                            style="background: white; width: fit-content; color: black; border-radius: 20px">27 October
                            2024</p>
                        <div class="d-flex">
                            <div class="line"></div>
                            <div class="d-flex flex-column">
                                <h1 class="card-title fw-bold">Why Reducing Food Waste is Essential</h1>
                                <p class="card-text"><small>Lorem ipsum odor amet, consectetuer adipiscing elit. Litora
                                        vehicula habitant feugiat magnis rutrum orci. Ligula gravida metus ex, ultricies
                                        pharetra ultricies iaculis dapibus. Lacus ligula venenatis tellus accumsan massa
                                        venenatis justo. Purus suspendisse convallis</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Carousel 2 --}}
            <div class="carousel-item" data-bs-interval="7000">
                <img src="{{ asset('image/carousel2.png') }}" class="d-block w-100" style="object-fit: contain">
                <div class="card-img-overlay">
                    <div class="text-card d-flex flex-column">
                        <p class="ms-4 py-2 px-4 border-dark"
                            style="background: white; width: fit-content; color: black; border-radius: 20px">27 October
                            2024</p>
                        <div class="d-flex">
                            <div class="line2"></div>
                            <div class="d-flex flex-column">
                                <h1 class="card-title fw-bold">Helping 500 Families Through Food <br> Donations in
                                    Tangerang</h1>
                                <p class="card-text"><small>Lorem ipsum odor amet, consectetuer adipiscing elit. Litora
                                        vehicula habitant feugiat magnis rutrum orci. Ligula gravida metus ex, ultricies
                                        pharetra ultricies iaculis dapibus. Lacus ligula venenatis tellus accumsan massa
                                        venenatis justo. Purus suspendisse convallis</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Carousel 3 --}}
            <div class="carousel-item" data-bs-interval="7000">
                <img src="{{ asset('image/carousel3.png') }}" class="d-block w-100" style="object-fit: contain">
                <div class="card-img-overlay">
                    <div class="text-card d-flex flex-column">
                        <p class="ms-4 py-2 px-4 border-dark"
                            style="background: white; width: fit-content; color: black; border-radius: 20px">27 October
                            2024</p>
                        <div class="d-flex">
                            <div class="line2"></div>
                            <div class="d-flex flex-column">
                                <h1 class="card-title fw-bold">Helping 500 Families Through Food <br>Donations in
                                    Tangerang</h1>
                                <p class="card-text"><small>Lorem ipsum odor amet, consectetuer adipiscing elit. Litora
                                        vehicula habitant feugiat magnis rutrum orci. Ligula gravida metus ex, ultricies
                                        pharetra ultricies iaculis dapibus. Lacus ligula venenatis tellus accumsan massa
                                        venenatis justo. Purus suspendisse convallis</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    {{-- End of Carousel Section --}}

    {{-- Start of News Section --}}
    <div class="container-fluid">
        <div class="cont-news ms-5 me-5 mt-5 mb-5">
            <div class="title-news d-flex justify-content-between align-items-center pt-4">
                <div class="d-flex justify-content-start align-items-center">
                    <div class="lines me-3"></div>
                    <h1 class="fw-bolder">Breaking News</h1>
                </div>
            </div>

            <div class="pt-3">
                <div class="row d-flex justify-content-between gap-3">
                    {{-- Bagian Kiri --}}
                    <div class="title-content-news d-flex flex-column justify-content-between col pb-4 ">
                        <img src="{{ asset('image/news.png') }}" style="width: 550px">

                        <div class="single-news pt-4">
                            <p class="date-news py-2 px-4">27 October, 2024</p>
                            <h4 class="fw-bold">Lorem ipsum odor amet, consectetuer adipiscing elit. Litora vehicula
                                habitant feugiat</h4>
                            <p class="text-news">Lorem ipsum odor amet, consectetuer adipiscing elit. Litora vehicula
                                habitant feugiat magnis rutrum orci. Ligula gravida metus ex, ultricies pharetra
                                ultricies iaculis dapibus...
                                <a href="" class="read-more fw-bold">Read More &raquo;</a>
                            </p>
                        </div>
                    </div>


                    {{-- Bagian Kanan --}}
                    <div class="title-content-news d-flex flex-column col pb-4">
                        <div class="single-news">
                            <p class="date-news py-2 px-4">27 October, 2024</p>
                            <h4 class="fw-bold">Lorem ipsum odor amet, consectetuer adipiscing elit. Litora vehicula
                                habitant feugiat</h4>
                            <p class="text-news">Lorem ipsum odor amet, consectetuer adipiscing elit. Litora vehicula
                                habitant feugiat magnis rutrum orci. Ligula gravida metus ex, ultricies pharetra
                                ultricies iaculis dapibus...
                                <a href="" class="read-more fw-bold">Read More &raquo;</a>
                            </p>
                        </div>

                        <div class="line-news"></div>

                        <div class="single-news">
                            <p class="date-news py-2 px-4">27 October, 2024</p>
                            <h4 class="fw-bold">Lorem ipsum odor amet, consectetuer adipiscing elit. Litora vehicula
                                habitant feugiat</h4>
                            <p class="text-news">Lorem ipsum odor amet, consectetuer adipiscing elit. Litora vehicula
                                habitant feugiat magnis rutrum orci. Ligula gravida metus ex, ultricies pharetra
                                ultricies iaculis dapibus...
                                <a href="" class="read-more fw-bold">Read More &raquo;</a>
                            </p>
                        </div>

                        <div class="line-news"></div>

                        <div class="single-news">
                            <p class="date-news py-2 px-4">27 October, 2024</p>
                            <h4 class="fw-bold">Lorem ipsum odor amet, consectetuer adipiscing elit. Litora vehicula
                                habitant feugiat</h4>
                            <p class="text-news">Lorem ipsum odor amet, consectetuer adipiscing elit. Litora vehicula
                                habitant feugiat magnis rutrum orci. Ligula gravida metus ex, ultricies pharetra
                                ultricies iaculis dapibus...
                                <a href="" class="read-more fw-bold">Read More &raquo;</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End of News Section --}}


    {{-- Start of Article Section --}}
    <div class="container-fluid">
        <div class="cont-news ms-5 me-5 mt-5 mb-4">
            <div class="title-news d-flex justify-content-between align-items-center pt-4">
                <div class="d-flex justify-content-start align-items-center">
                    <div class="lines me-3"></div>
                    <h1 class="fw-bolder">Latest News</h1>
                </div>
            </div>
        </div>
    </div>

    {{-- Post Card --}}
    <div class="container-fluid">
        <div class="cont-vol ms-5 me-5 mb-5">
            <div class="row">
                @forelse ($news as $item)
                    <div class="col-md-4 mb-4">
                        <div class="card" style="width: 23rem;">
                            <img src="{{ asset('image/volimg.png') }}" class="card-img-top"
                                style="max-height: 330px; width:auto; object-fit: cover; object-position: top; border-radius: 25px 25px 0 0">
                            <div class="card-body">
                                <p class="ps-1" style="color: rgb(137, 137, 137)">{{ $item->time->diffForHumans() }}
                                </p>
                                <h5 class="card-title fs-4 fw-bolder">
                                    {{ Str::limit($item['title'], 20) }}
                                </h5>
                                <p class="card-desc lh-1 fw-light">
                                    {{ Str::limit($item['description'], 115) }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="pt-3" style="color: rgb(75, 75, 75)"><span
                                            style="font-weight: bold; color: #0F4235">by
                                            {{ $item->author }}
                                        </span> &#9679; 5 min read</p>
                                    <a href="/news/{{ $item['id'] }}"><img src="{{ asset('image/ScrollUp.png') }}"
                                            style="width: 60px"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="d-flex justify-content-center align-items-center" style="height: 400px;">
                        <p class="text-center fs-4 fw-bold">Currently, no news available.</p>
                    </div>
                @endforelse
            </div>
            <div class="mt-4">
                {{ $news->links() }}
            </div>
        </div>
    </div>



    {{-- Start of Footer Section --}}
    <x-footer></x-footer>
    {{-- End of Footer Section --}}


</body>
