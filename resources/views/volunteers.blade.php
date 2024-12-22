<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Save The Meal | Volunteers</title>
    <link rel="stylesheet" href="{{ asset('style/volunteers.css') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900;1000&display=swap"
        rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    {{-- Start of Navbar Section --}}
    <x-navbar />
    {{-- End of Navbar Section --}}

    {{-- Start of First Section --}}
    <div class="container-fluid">
        <div class="ms-5 me-5 mt-4 mb-3">
            <div class="donate-to row pt-3">
                <!-- Kolom Kiri -->
                <div class="col-md-7">
                    <div class="d-flex flex-column justify-content-between" style="height: 100%;">
                        <div class="d-flex align-items-center">
                            <h4 class="title-donate-to2 fw-bold py-3 px-4">Make a Difference, One Meal at a Time</h4>
                        </div>
                        <h2 class="fw-normal pt-2" style="text-align: justify;">Volunteering with us means contributing
                            to the fight against food waste and hunger, bringing hope to communities in need, and
                            becoming part of a passionate and supportive team that shares the same mission.</h2>
                        <div class="d-flex flex-column justify-content-center align-items-center mt-auto">
                            <h4>Upcoming Activities</h4>
                            <div style=" transform: rotate(90deg); font-size: 50px" id="scroll-button">&raquo;</div>
                        </div>
                    </div>
                </div>


                <!-- Kolom Kanan -->
                <div class="help-us col-md-5">
                    <img src="{{ asset('image/volunteerimg.png') }}" style="max-width: 100%">
                </div>
            </div>
        </div>
    </div>
    {{-- End of First Section --}}


    {{-- Start of Volunteer Section --}}
    <div class="container-fluid" id="volunteer-section">
        <div class="cont-vol ms-5 me-5 mt-5 mb-5">
            <div class="title-vol d-flex justify-content-between align-items-center pt-4">
                <div class="d-flex justify-content-start align-items-center">
                    <div class="line me-3"></div>
                    <h1 class="fw-bolder">Discover the latest opportunities <br> to contribute - loket.com</h1>
                </div>

                <div class="dropdown">
                    <button class="dropdown-toggle btn px-5 fs-3 fw-bold" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        November 2024
                    </button>
                    <ul class="dropdown-menu px-5 fs-3">
                        <li><a class="dropdown-item" href="#">All</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Desember 2024</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">January 2025</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">February 2025</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    {{-- Volunteer Card --}}
    <div class="container-fluid">
        <div class="cont-vol ms-5 me-5 mt-5 mb-5">
            <div class="row">
                @forelse ($volunteers as $volunteer)
                    <div class="col-md-4 mb-4">
                        <div class="card" style="width: 23rem;">
                            <img src="{{ asset('image/volimg.png') }}" class="card-img-top"
                                style="max-height: 330px; width:auto; object-fit: cover; object-position: top; border-radius: 25px 25px 0 0">
                            <div class="card-body">
                                <span><img src="{{ asset('image/loc.png') }}"
                                        style="max-width: 100%; margin-right: 15px">{{ $volunteer->location }}</span>
                                <h5 class="card-title pt-3 fs-4 fw-bolder">{{ Str::limit($volunteer['title'], 27) }}
                                </h5>
                                <p class="card-text lh-1 fw-light">{{ Str::limit($volunteer['description'], 130) }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="pt-3"><span style="font-weight: bold; color: #0F4235">Spots Left:
                                        </span>{{ $volunteer->quota }} Volunteers</p>
                                    <a href="https://www.loket.com"><img src="{{ asset('image/ScrollUp.png') }}"
                                            style="width: 60px"></a>

                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="d-flex justify-content-center align-items-center" style="height: 400px;">
                        <p class="text-center fs-4 fw-bold">Currently, no volunteer events are available.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
    {{-- End of Volunteer Section --}}


    {{-- Start of Benefit Donate --}}
    <div class="container-fluid">
        <div class="ms-5 me-5 mt-3 mb-5">
            <div class="cont-ways-donate">
                <div class="title-ways-donate d-flex align-items-center pt-4">
                    <div class="line1 me-3"></div>
                    <h1 class="fw-bolder">What’s in it for you?</h1>
                </div>

                <div class="container-fluid pt-4">
                    <div class="row d-flex justify-content-between gap-3">
                        <div class="why-donate d-flex flex-column justify-content-center align-items-center col">
                            <img src="{{ asset('image/vol1.png') }}" style="max-width: 100%">
                            <h4 class="fw-bold text-center pt-4 text-white">Certificate of appreciation for your time
                                and effort.
                            </h4>
                        </div>

                        <div class="why-donate d-flex flex-column justify-content-center align-items-center col">
                            <img src="{{ asset('image/vol2.png') }}" style="max-width: 100%" alt="">
                            <h4 class="fw-bold text-center pt-4 text-white">The joy of giving back to the community.
                            </h4>
                        </div>

                        <div class="why-donate d-flex flex-column justify-content-center align-items-center col">
                            <img src="{{ asset('image/vol3.png') }}" style="max-width: 100%" alt="">
                            <h4 class="fw-bold text-center pt-4 text-white">New friendships and experiences.</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End of Benefit Donate --}}


    {{-- Start of Quote Section --}}
    <div class="container-fluid">
        <div class="ms-5 me-5 mt-5 mb-5">
            <div class="pt-5 d-flex flex-column justify-content-center align-items-center text-center lh-1">
                <p class="fw-bold">Dieter F. Uchtdorf</p>
                <h1 class="fw-bold">"As we lose ourselves in the service of others, we discover our own lives and our
                    own happiness."</h1>
            </div>
        </div>
    </div>
    {{-- End of Quote Section --}}


    {{-- Start of Testimoni Section --}}
    <div class="container-fluid">
        <div class="ms-5 me-5 mt-3 mb-5 pb-5">
            <div class="testimonial-cont d-flex" style="overflow-x: auto; gap: 20px;">

                {{-- Testimonial 1 --}}
                <div class="testi" style="max-width: 95%; flex-shrink: 0;">
                    <div class="row">
                        <div class="col">
                            <img src="{{ asset('image/testi.png') }}" style="max-width: 100%;">
                        </div>
                        <div class="testi-text col d-flex flex-column justify-content-between py-3">
                            <p class="fw-bold py-1 px-4">Volunteer Testimonial</p>
                            <h2 class="fw-bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</h2>
                            <h4>-Vira Yesica</h4>
                        </div>
                    </div>
                </div>

                {{-- Testimonial 2 --}}
                <div class="testi" style="max-width: 95%; flex-shrink: 0;">
                    <div class="row">
                        <div class="col">
                            <img src="{{ asset('image/testi.png') }}" style="max-width: 100%;">
                        </div>
                        <div class="testi-text col d-flex flex-column justify-content-between py-3">
                            <p class="fw-bold py-1 px-4">Volunteer Testimonial</p>
                            <h2 class="fw-bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</h2>
                            <h4>-Afrida Salsabila</h4>
                        </div>
                    </div>
                </div>

                {{-- Testimonial 3 --}}
                <div class="testi" style="max-width: 95%; flex-shrink: 0;">
                    <div class="row">
                        <div class="col">
                            <img src="{{ asset('image/testi.png') }}" style="max-width: 100%;">
                        </div>
                        <div class="testi-text col d-flex flex-column justify-content-between py-3">
                            <p class="fw-bold py-1 px-4">Volunteer Testimonial</p>
                            <h2 class="fw-bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</h2>
                            <h4>-Jacqueline Season</h4>
                        </div>
                    </div>
                </div>

                {{-- Testimonial 4 --}}
                <div class="testi" style="max-width: 95%; flex-shrink: 0;">
                    <div class="row">
                        <div class="col">
                            <img src="{{ asset('image/testi.png') }}" style="max-width: 100%;">
                        </div>
                        <div class="testi-text col d-flex flex-column justify-content-between py-3">
                            <p class="fw-bold py-1 px-4">Volunteer Testimonial</p>
                            <h2 class="fw-bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</h2>
                            <h4>-John Doe</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End of Testimoni Section --}}



    {{-- Start of Footer Section --}}
    <x-footer />
    {{-- End of Footer Section --}}


    <script>
        // Pastikan elemen tombol ditemukan
        const scrollButton = document.getElementById('scroll-button');
        const volunteerSection = document.getElementById('volunteer-section');

        if (scrollButton && volunteerSection) {
            scrollButton.addEventListener('click', function() {
                console.log('Tombol diklik, scrolling...');
                volunteerSection.scrollIntoView({ behavior: 'smooth' });
            });
        } else {
            console.log('Elemen tidak ditemukan!');
        }
    </script>
</body>
