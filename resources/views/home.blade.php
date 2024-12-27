<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Save The Meal | Home</title>
    <link rel="stylesheet" href="/style/home.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900;1000&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/build/assets/app-27abf3b7.css">
    <script src="/build/assets/app-cee1c8b9.js" defer></script>
</head>

<body>
    {{-- Start of Navbar Section --}}
    <x-navbar />
    {{-- End of Navbar Section --}}

    {{-- Start of Header Section --}}
    <div class="header-section container-fluid pt-4 pb-3">
        <div class="row ms-4 me-4">

            {{-- Konten Kiri --}}
            <div class="col-md-6 d-flex flex-column">
                <div class="text-group">
                    <div class="line1 d-flex gap-2">
                        <h1 class="line1-text1 fw-light">YOUR</h1>
                        <h1 class="line1-text2 fw-bolder">KINDNESS HAS</h1>
                    </div>
                    <div class="line2 d-flex justify-content-start align-items-center" style="position: relative">
                        <h1 class="line2-text1 me-2 fw-bolder">THE</h1>
                        <img src="{{ asset('image/image1.png') }}" style="width: 470px" alt="">
                    </div>
                    <h1 class="power-text fw-bolder">POWER TO CHANGE LIVES</h1>
                </div>

                <div class="row mt-4 d-flex justify-content-between">
                    <div class="container-1 col-md-6 d-flex flex-column">
                        <div class="cont1 container d-flex flex-column pb-4">
                            <div class="pt-4 ps-3">
                                <h1 class="take-text fw-bolder pt-2 me-3">Take <br> Action <br> Today !</h1>
                            </div>
                            <a class="span1 btn mt-3 d-flex justify-content-center align-items-center fw-bolder gap-3 fs-5 text-white"
                                href="/donate">Donate Now
                                <img src="{{ asset('image/ScrollUpw.png') }}" alt="">
                            </a>
                            <a class="span2 btn mt-3 d-flex justify-content-center align-items-center  fw-bolder fs-5 py-2 gap-1"
                                href="/volunteers">Join as Volunteer
                                <img src="{{ asset('image/ScrollUp.png') }}" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="container-2 col-md-6 d-flex flex-column justify-content-between py-1">
                        <div class="cont2 container d-flex flex-column py-4">
                            <div class="container">
                                <h4 class="fw-bold">Lorem ipsum odor amet</h4>
                                <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vel diam ante. Duis
                                    dictum id tellus ut pulvinar.</h6>
                            </div>
                        </div>
                        <div class="cont3 container d-flex flex-column py-4">
                            <div class="container">
                                <h4 class="fw-bold">Lorem ipsum odor amet</h4>
                                <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vel diam ante. Duis
                                    dictum id tellus ut pulvinar. </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            {{-- Konten Kanan --}}
            <div class="col-md-6">
                <div class="container d-flex flex-column ms-4 pe-5">
                    <div class="d-flex gap-3 mt-2">
                        <h5 class="tag-1 px-3 py-2 fw-bold">#SavingMealsSavingLives</h5>
                        <h5 class="tag-2 px-3 py-2 fw-bold">#ShareASmile</h5>
                    </div>
                    <h5 class="p-text-save pt-2 fw-normal">Save The Meal is a platform connecting donors, volunteers,
                        and surplus food from restaurants to reduce food waste and provide affordable meals to those in
                        need across Indonesia. With your support, we can turn excess into hope.</h5>
                </div>

                <div class="img-impact card" style="position: relative; border: none;">
                    <img src="{{ asset('image/image2.png') }}" class="card-img" alt="...">
                    <div class="card-img-overlay d-flex flex-column justify-content-end p-2">
                        <h5 class="card-title m-0">See How We Make</h5>
                        <h5 class="card-title m-0">an Impact
                            <a href="https://www.youtube.com"><img class="img-arrow" src="{{ asset('image/Arrow1.png') }}"
                                    style="width: 68px"><a>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End of Header Section --}}

    {{-- Start of Choice Section --}}
    <div class="container-fluid">
        <div class="cont-choice ms-5 me-5 mt-5 mb-5">
            <div class="p-5">
                <div class="title-choice d-flex align-items-center">
                    <div class="line me-3"></div>
                    <h1 class="fw-bolder">Together, We Can Make a Difference</h1>
                </div>

                <p class="p-indo pt-4 fs-4">In Indonesia, 23-48 million tons of food go to waste each year – enough to
                    feed millions of people. By rescuing surplus food from restaurants, together we can transform
                    potential food waste into hope and nourishment for those in need.</p>

                <div class="container pt-4">
                    <div class="row d-flex justify-content-evenly" style="gap: 40px;">
                        <!-- Bagian Kiri -->
                        <div class="donation1 p-4">
                            <span class="d-flex align-items-end fs-2 fw-bold gap-3">
                                <img src="{{ asset('image/donation.png') }}" alt="">Donation
                            </span>
                            <p class="pt-4 fs-5">Your donations help us distribute affordable meals to those who need
                                them most, ensuring more food reaches people instead of the trash.</p>
                        </div>

                        <!-- Bagian Kanan -->
                        <div class="volunteer1 p-4">
                            <span class="d-flex align-items-end fs-2 fw-bold gap-3">
                                <img src="{{ asset('image/volunteer.png') }}" alt="">Volunteer
                            </span>
                            <p class="pt-4 fs-5">Lend your time and skills to fight food waste. Whether it’s collecting,
                                distributing, or raising awareness, every bit helps make a difference. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End of Choice Section --}}


    {{-- Start of How It Works Section --}}
    <div class="container-fluid">
        <div class="cont-works ms-5 me-5 mt-5 mb-5">
            <div class="title-works d-flex justify-content-start align-items-center pt-4">
                <div class="line me-3"></div>
                <h1 class="fw-bolder">How It Works</h1>
            </div>

            <div class="container-fluid pt-4">
                <div class="row d-flex justify-content-between gap-4">
                    <div class="title-content col pt-3 pb-4">
                        <h2 class="d-flex justify-content-center text-center pb-3 fw-bold pt-3">For Restaurants/ <br>
                            Donors:</h2>

                        <div
                            class="sub-content d-flex flex-column justify-content-center alig-items-center text-center ps-2 pe-2 py-2">
                            <h5 class="fw-bold">Register :</h5>
                            <h6>Sign up as a restaurant partner.</h6>
                        </div>
                        <div class="d-flex justify-content-center py-1">
                            <img src="{{ asset('image/Arrow4.png') }}" style="max-width: 10px" alt="">
                        </div>

                        <div
                            class="sub-content d-flex flex-column justify-content-center alig-items-center text-center ps-2 pe-2 py-2">
                            <h5 class="fw-bold">Input :</h5>
                            <h6>Enter surplus food information.</h6>
                        </div>
                        <div class="d-flex justify-content-center py-1">
                            <img src="{{ asset('image/Arrow4.png') }}" style="max-width: 10px" alt="">
                        </div>

                        <div
                            class="sub-content d-flex flex-column justify-content-center alig-items-center text-center ps-2 pe-2 py-2">
                            <h5 class="fw-bold">Schedule :</h5>
                            <h6>Set up a pickup schedule.</h6>
                        </div>
                        <div class="d-flex justify-content-center py-1">
                            <img src="{{ asset('image/Arrow4.png') }}" style="max-width: 10px" alt="">
                        </div>

                        <div
                            class="sub-content d-flex flex-column justify-content-center alig-items-center text-center ps-2 pe-2 py-2">
                            <h5 class="fw-bold">Impact :</h5>
                            <h6>Receive impact reports.</h6>
                        </div>
                    </div>

                    <div class="title-content col pt-3 pb-4">
                        <h2 class="d-flex justify-content-center text-center pb-5 fw-bold pt-3">For Volunteers :</h2>

                        <div
                            class="sub-content d-flex flex-column justify-content-center alig-items-center text-center ps-2 pe-2 py-2">
                            <h5 class="fw-bold">Join :</h5>
                            <h6>Sign up as a volunteer.</h6>
                        </div>
                        <div class="d-flex justify-content-center py-1">
                            <img src="{{ asset('image/Arrow4.png') }}" style="max-width: 10px" alt="">
                        </div>

                        <div
                            class="sub-content d-flex flex-column justify-content-center alig-items-center text-center ps-2 pe-2 py-2">
                            <h5 class="fw-bold">Train :</h5>
                            <h6>Complete food safety training.</h6>
                        </div>
                        <div class="d-flex justify-content-center py-1">
                            <img src="{{ asset('image/Arrow4.png') }}" style="max-width: 10px" alt="">
                        </div>

                        <div
                            class="sub-content d-flex flex-column justify-content-center alig-items-center text-center ps-2 pe-2 py-2">
                            <h5 class="fw-bold">Pick Up :</h5>
                            <h6>Collect food from restaurants.</h6>
                        </div>
                        <div class="d-flex justify-content-center py-1">
                            <img src="{{ asset('image/Arrow4.png') }}" style="max-width: 10px" alt="">
                        </div>

                        <div
                            class="sub-content d-flex flex-column justify-content-center alig-items-center text-center ps-2 pe-2 py-2">
                            <h5 class="fw-bold">Distribute :</h5>
                            <h6>Deliver to beneficiaries.</h6>
                        </div>
                    </div>

                    <div class="title-content col pt-3 pb-4">
                        <h2 class="d-flex justify-content-center text-center pb-5 fw-bold pt-3">For Beneficiaries :
                        </h2>

                        <div
                            class="sub-content d-flex flex-column justify-content-center alig-items-center text-center ps-2 pe-2 py-2">
                            <h5 class="fw-bold">Register :</h5>
                            <h6>Sign up as a recipient.</h6>
                        </div>
                        <div class="d-flex justify-content-center py-1">
                            <img src="{{ asset('image/Arrow4.png') }}" style="max-width: 10px" alt="">
                        </div>

                        <div
                            class="sub-content d-flex flex-column justify-content-center alig-items-center text-center ps-2 pe-2 py-2">
                            <h5 class="fw-bold">Verify :</h5>
                            <h6>Verify your needs.</h6>
                        </div>
                        <div class="d-flex justify-content-center py-1">
                            <img src="{{ asset('image/Arrow4.png') }}" style="max-width: 10px" alt="">
                        </div>

                        <div
                            class="sub-content d-flex flex-column justify-content-center alig-items-center text-center ps-2 pe-2 py-2">
                            <h5 class="fw-bold">Receive :</h5>
                            <h6>Receive quality food.</h6>
                        </div>
                        <div class="d-flex justify-content-center py-1">
                            <img src="{{ asset('image/Arrow4.png') }}" style="max-width: 10px" alt="">
                        </div>

                        <div
                            class="sub-content d-flex flex-column justify-content-center alig-items-center text-center ps-2 pe-2 py-2">
                            <h5 class="fw-bold">Share :</h5>
                            <h6>Share your testimony.</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End of How It Works Section --}}


    {{-- Start of News Section --}}
    <div class="container-fluid">
        <div class="cont-news ms-5 me-5 mt-5 mb-5">
            <div class="title-news d-flex justify-content-between align-items-center pt-4">
                <div class="d-flex justify-content-start align-items-center">
                    <div class="line me-3"></div>
                    <h1 class="fw-bolder">News and Updates</h1>
                </div>

                <a href="/news">
                    <img class="ms-auto" src="{{ asset('image/UpArrow.png') }}">
                </a>

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


    {{-- Start of Comment Section --}}
    <div class="comment-sect container-fluid">
        <div class="cont-comment ms-5 me-5 mt-5 mb-5">
            <div class="pt-3">
                <div class="row d-flex justify-content-between gap-3">
                    {{-- Bagian Kiri --}}
                    <div class="title-content-comment d-flex flex-column justify-content-between col pb-4 ">
                        <div class="title-comment d-flex justify-content-start align-items-center pt-4">
                            <div class="line2 me-3"></div>
                            <h1 class="fw-bolder">Be a Part of Our <br> Volunteer Family!</h1>
                        </div>

                        <h4 class="pt-4 text-white fw-normal">Join us at <strong>Save The Meal </strong>and become a
                            vital part of our mission to reduce food waste and provide meals to those in need across
                            Indonesia. Your time and skills can make a huge difference!</h4>

                        <div class="horizontal-scroll">
                            {{-- Comment 1 --}}
                            <div class="cont-scroll1 p-4 mt-3">
                                <h3>&#9733; &#9733; &#9733; &#9733; &#9734;</h3>
                                <h5 class="pb-4 fw-bold pt-1">"I feel like I'm truly making a difference by helping
                                    reduce food waste and feeding those in need!"</h5>
                                <span class="fs-5"><img class="pe-4" src="{{ asset('image/profile.png') }}"
                                        alt="">virayesica</span>
                            </div>

                            {{-- Comment 2 --}}
                            <div class="cont-scroll2 p-4 mt-3">
                                <h3>&#9733; &#9733; &#9733; &#9733; &#9734;</h3>
                                <h5 class="pb-4 fw-bold pt-1">"Volunteering with Save The Meal has been incredibly
                                    rewarding. Every effort counts!"</h5>
                                <span class="fs-5"><img class="pe-4" src="{{ asset('image/profile.png') }}"
                                        alt="">afridasalsabila</span>
                            </div>


                            {{-- Comment 3 --}}
                            <div class="cont-scroll1 p-4 mt-3">
                                <h3>&#9733; &#9733; &#9733; &#9733; &#9734;</h3>
                                <h5 class="pb-4 fw-bold pt-1">"Being part of this cause has opened my eyes to how much
                                    good we can do together"</h5>
                                <span class="fs-5"><img class="pe-4" src="{{ asset('image/profile.png') }}"
                                        alt="">jacquelineseason</span>
                            </div>

                            {{-- Comment 4 --}}
                            <div class="cont-scroll2 p-4 mt-3">
                                <h3>&#9733; &#9733; &#9733; &#9733; &#9734;</h3>
                                <h5 class="pb-4 fw-bold pt-1">"I love seeing the direct impact my work has on the
                                    community. It's fulfilling!"</h5>
                                <span class="fs-5"><img class="pe-4" src="{{ asset('image/profile.png') }}"
                                        alt="">johndoe</span>
                            </div>
                        </div>
                    </div>

                    {{-- Bagian Kanan --}}
                    <div class="title-content-news d-flex flex-column justify-content-center col pb-4 ">
                        <div class="container-carousel">
                            <div id="carouselExampleAutoplaying" class="carousel slide p-4" data-bs-ride="carousel">
                                <div class="carousel-inner" style="border-radius: 20px">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('image/c1.png') }}" class="d-block w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('image/c2.png') }}" class="d-block w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('image/c3.png') }}" class="d-block w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('image/c4.png') }}" class="d-block w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('image/c5.png') }}" class="d-block w-100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Bagian Bawah --}}
                <div style="padding-bottom: 1px; padding-top: 25px">
                    <div class="bottom-comment d-flex justify-content-between align-items-center p-4 px-5 mb-5">
                        <h1 class="fw-bolder">Are You The Next One!</h1>
                        <a href="/volunteers">
                            <p class="fs-3 fw-bold py-2 px-5">Join Now! <img class="ps-4"
                                    src="{{ asset('image/ScrollUp.png') }}" alt=""></p>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End of Comment Section --}}


    {{-- Start of FaQ Section --}}
    <div class="container-fluid">
        <div class="cont-news ms-5 me-5 mt-5 mb-5">
            <div class="title-news d-flex justify-content-start align-items-center pt-4">
                <div class="line me-3"></div>
                <h1 class="fw-bolder">Frequently Asked Questions (FAQ)</h1>
            </div>

            <p class="p-our pt-2 fs-4">Our friendly team is always here to help and would love to answer any of your
                questions!</p>

            <div class="accordion mt-5" id="accordionPanelsStayOpenExample">
                {{-- Accordion 1 --}}
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button fs-3 fw-bolder p-4" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                            aria-controls="panelsStayOpen-collapseOne">
                            What is Save The Meal?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                        <div class="accordion-body fs-5">
                            Save The Meal is a movement dedicated to reducing food waste and providing affordable meals
                            to people in need across Indonesia. By rescuing surplus food from restaurants and food
                            providers, we ensure that perfectly good meals don’t end up in the trash but instead reach
                            those who need them the most. Our goal is to tackle both food waste and hunger, bringing
                            sustainability and compassion together.
                        </div>
                    </div>
                </div>

                {{-- Accordion 2 --}}
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed fs-3 fw-bolder p-4" type="button"
                            data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo"
                            aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                            How can I get involved with Save The Meal?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                        <div class="accordion-body fs-5">
                            Save The Meal is a movement dedicated to reducing food waste and providing affordable meals
                            to people in need across Indonesia. By rescuing surplus food from restaurants and food
                            providers, we ensure that perfectly good meals don’t end up in the trash but instead reach
                            those who need them the most. Our goal is to tackle both food waste and hunger, bringing
                            sustainability and compassion together.
                        </div>
                    </div>
                </div>

                {{-- Accordion 3 --}}
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed fs-3 fw-bolder p-4" type="button"
                            data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree"
                            aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                            Where does the rescued food come from?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                        <div class="accordion-body fs-5">
                            Save The Meal is a movement dedicated to reducing food waste and providing affordable meals
                            to people in need across Indonesia. By rescuing surplus food from restaurants and food
                            providers, we ensure that perfectly good meals don’t end up in the trash but instead reach
                            those who need them the most. Our goal is to tackle both food waste and hunger, bringing
                            sustainability and compassion together.
                        </div>
                    </div>
                </div>

                {{-- Accordion 4 --}}
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed fs-3 fw-bolder p-4" type="button"
                            data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour"
                            aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                            How does Save The Meal ensure food safety?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse">
                        <div class="accordion-body fs-5">
                            Save The Meal is a movement dedicated to reducing food waste and providing affordable meals
                            to people in need across Indonesia. By rescuing surplus food from restaurants and food
                            providers, we ensure that perfectly good meals don’t end up in the trash but instead reach
                            those who need them the most. Our goal is to tackle both food waste and hunger, bringing
                            sustainability and compassion together.
                        </div>
                    </div>
                </div>

                {{-- Accordion 5 --}}
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed fs-3 fw-bolder p-4" type="button"
                            data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive"
                            aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
                            Who benefits from the rescued food?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse">
                        <div class="accordion-body fs-5">
                            Save The Meal is a movement dedicated to reducing food waste and providing affordable meals
                            to people in need across Indonesia. By rescuing surplus food from restaurants and food
                            providers, we ensure that perfectly good meals don’t end up in the trash but instead reach
                            those who need them the most. Our goal is to tackle both food waste and hunger, bringing
                            sustainability and compassion together.
                        </div>
                    </div>
                </div>

                {{-- Accordion 6 --}}
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed fs-3 fw-bolder p-4" type="button"
                            data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix"
                            aria-expanded="false" aria-controls="panelsStayOpen-collapseSix">
                            What do volunteers do at Save The Meal?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse">
                        <div class="accordion-body fs-5">
                            Save The Meal is a movement dedicated to reducing food waste and providing affordable meals
                            to people in need across Indonesia. By rescuing surplus food from restaurants and food
                            providers, we ensure that perfectly good meals don’t end up in the trash but instead reach
                            those who need them the most. Our goal is to tackle both food waste and hunger, bringing
                            sustainability and compassion together.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End of FaQ Section --}}


    {{-- Start of Footer Section --}}
    <x-footer />
    {{-- End of Footer Section --}}
</body>

</html
