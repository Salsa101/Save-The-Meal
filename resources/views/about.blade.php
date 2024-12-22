<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Save The Meal | Donate</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900;1000&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style/about.css') }}">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    {{-- Start of Navbar Section --}}
    <x-navbar />
    {{-- End of Navbar Section --}}

    <!-- Start of Section Title -->
    <div class="container-fluid">
        <div class="ms-5 me-5 mt-4 mb-3">
            <div class="donate-to">
                <div class="d-flex flex-column">
                    <div class="d-flex align-items-center">
                        <h1 class="fw-normal pe-3">About</h1>
                        <h6 class="title-about2 fw-bold py-2 px-3">Fight Waste, Fight Hunger</h6>
                    </div>
                    <h1 class="title-stm fw-bolder">Save The Meal.</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Section Title -->


    <!-- Start of First Section -->
    <div class="container-fluid">
        <div class="ms-5 me-5 mt-4 mb-3">
            <div class="row gap-3">
                <div class="col">
                    <img src="{{ asset('image/About1.png') }}" alt="About Save The Meal" style="max-width: 100%">
                </div>

                <div class="col d-flex justify-content-center align-items-center">
                    <p class="about-us-description fs-3" style="text-align: justify; line-height: 1.4">
                        At Save The Meal, we are dedicated to <span class="fw-bolder" style="color: #0F4235;">bridging
                            the gap between food surplus and food scarcity in Indonesia.</span> Our mission is simple
                        yet powerful: to connect restaurants with those in need by facilitating donations of excess
                        food, ensuring that no meal goes to waste and that hungry individuals receive the nourishment
                        they deserve.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End of First Section -->


    <!-- Start of Second Section -->
    <div class="container-fluid">
        <div class="ms-5 me-5 mt-4 mb-3">
            <div class="row gap-3">
                <div class="col d-flex justify-content-center align-items-center">
                    <p class="about-us-description fs-3" style="text-align: justify; line-height: 1.4">
                        <span class="fw-bolder" style="color: #0F4235;">Indonesia</span>, as the largest producer of
                        food waste in Southeast Asia, faces a significant challenge. According to the United Nations
                        Environment Program (UNEP) report titled Food Waste Index 2021, the country generates an
                        overwhelming amount of food waste every year. Meanwhile, the 2023 Global Hunger Index (GHI)
                        places Indonesia as the second-highest country in Southeast Asia in terms of hunger levels, with
                        millions of people struggling to access nutritious meals.
                    </p>
                </div>

                <div class="col">
                    <img src="{{ asset('image/About2.png') }}" alt="About Save The Meal" style="max-width: 100%">
                </div>
            </div>
        </div>
    </div>
    <!-- End of Second Section -->

    {{-- Start of Our Mission --}}
    <div class="container-fluid">
        <div class="ms-5 me-5 mt-3 mb-5">
            <div class="cont-ways-donate">
                <div class="title-ways-donate d-flex align-items-center py-4">
                    <div class="line me-3"></div>
                    <h1 class="fw-bolder">Our Mission</h1>
                </div>

                <p class="fs-3" style="text-align: justify">
                    We aim to tackle both of these pressing issues by providing a seamless platform where restaurants
                    can
                    donate excess food to those in need. Our goal is to reduce food waste while alleviating hunger,
                    creating a more sustainable and compassionate food system. By partnering with local restaurants and
                    organizations, we help ensure that surplus food is redirected to communities who need it most.
                    Together,
                    we can make a lasting impact on food security and sustainability in Indonesia. Join us in this
                    important
                    cause. Let’s make a difference, one meal at a time.
                </p>
            </div>
        </div>
    </div>

    {{-- Start of Impact Section --}}
    <div class="container-fluid">
        <div class="ms-5 me-5 mt-5 mb-5">
            <div class="cont-ways-donate">
                <div class="title-ways-donate d-flex align-items-center py-4">
                    <div class="line me-3"></div>
                    <h1 class="fw-bolder">See the Impact We’ve Made Together</h1>
                </div>

                <div class="row d-flex justify-content-between gap-4">
                    <div class="col d-flex">

                        <div class="impact-num d-flex flex-column justify-content-center align-items-center">
                            <h2 class="fw-bolder">50,000+</h2>
                            <h6 class="meals-delivery">Meals delivered across Indonesia</h6>
                        </div>

                        <div class="line-impact mx-3"></div>

                        <div class="impact-num d-flex flex-column justify-content-center align-items-center">
                            <h2 class="fw-bolder">500+</h2>
                            <h6 class="meals-delivery">Partner restaurants joining the fight against food waste</h6>
                        </div>

                        <div class="line-impact mx-3"></div>

                        <div class="impact-num d-flex flex-column justify-content-center align-items-center">
                            <h2 class="fw-bolder">300+</h2>
                            <h6 class="meals-delivery">Dedicated volunteers making it all possible</h6>
                        </div>
                    </div>

                    <div class="col">
                        <p class="each-number fs-5 fw-normal" style="color: #8E8E8E">Each number above is a testament
                            to the change we’re creating together. Thank you for being part of this journey—together,
                            we’re making a lasting impact across Indonesia.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- End of Impact Section --}}

    <!-- Start of Our Team Section -->
    <div class="container-fluid mt-5 pt-4 pb-3">
        <div class="row ms-4 me-4">
            <div class="col-12 text-center mb-4">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="line2 me-3"></div>
                    <h1 class="fw-bolder" style="color: #0F4235">Meet Our Team</h1>
                    <div class="line2 ms-3"></div>
                </div>
                <p class="fs-4">We are a passionate team working towards a hunger-free
                    Indonesia.</p>
            </div>
        </div>

        <div class="row ms-3 me-3 d-flex justify-content-center">
            <!-- Team Member 1 -->
            <div class="col-md-3 col-sm-4 col-6 text-center mb-4">
                <img src="{{ asset('image/salsa.png') }}" alt="Afrida Salsabila" class="img-fluid rounded-circle mb-3"
                    width="150" height="150">
                <h5 class="fw-bolder" style="color: #0F4235;">Afrida Salsabila Putri</h5>
                <p style="color: #0F4235;">Founder & CEO</p>
            </div>

            <!-- Team Member 2 -->
            <div class="col-md-3 col-sm-4 col-6 text-center mb-4">
                <img src="{{ asset('image/jeklin.png') }}" alt="Jacqueline Season" class="img-fluid rounded-circle mb-3"
                    width="150" height="150">
                <h5 class="fw-bolder" style="color: #0F4235;">Jacqueline Season</h5>
                <p style="color: #0F4235;">Operations Manager</p>
            </div>

            <!-- Team Member 3 -->
            <div class="col-md-3 col-sm-4 col-6 text-center mb-4">
                <img src="{{ asset('image/vyra.png') }}" alt="Vyra Yesica" class="img-fluid rounded-circle mb-3"
                    width="150" height="150">
                <h5 class="fw-bolder" style="color: #0F4235;">Vira Yesica</h5>
                <p style="color: #0F4235;">Volunteer Coordinator</p>
            </div>
        </div>
    </div>
    <!-- End of Our Team Section -->


    {{-- Start of Contact Section --}}
    <div class="container-fluid">
        <div class="ms-5 me-5 mt-3 mb-5">
            <div class="cont-ways-donate">
                <div class="title-ways-donate d-flex align-items-center py-4">
                    <div class="line me-3"></div>
                    <h1 class="fw-bolder">Have Questions?</h1>
                </div>

                <div class="row">
                    <div class="col-8">
                        <img src="{{ asset('image/contact-img.png') }}" style="width: 100%" alt="">
                    </div>

                    <div class="col-4 d-flex flex-column justify-content-between">
                        <div class="team-help d-flex flex-column">
                            <h2 class="fw-bolder pb-5">Our team is here to help</h2>

                            <div class="contact-info d-flex flex-column justify-content-between h-100">
                                <div class="by-email d-flex justify-content-start align-items-center py-2 px-4 mb-3">
                                    <img class="pe-4" src="{{ asset('image/letter.png') }}">
                                    <h5 class="fw-bold"><u>savethemeal@gmail.com</u></h5>
                                </div>

                                <div class="by-email d-flex justify-content-start align-items-center py-2 px-4 mb-3">
                                    <img class="pe-4" src="{{ asset('image/phone.png') }}">
                                    <h5 class="fw-bold">+62 8123 456 7890</h5>
                                </div>

                                <div class="slider-container" id="slider">
                                    <div class="slider-text" id="sliderText">Slide Over to Contact Us</div>
                                    <div class="slider-button" id="sliderButton">
                                        <span class="slider-arrow">➔</span>
                                    </div>
                                </div>

                                <script>
                                    const slider = document.getElementById('slider');
                                    const button = document.getElementById('sliderButton');
                                    const text = document.getElementById('sliderText');

                                    const sliderWidth = slider.offsetWidth;
                                    const buttonWidth = button.offsetWidth;
                                    const padding = 5;

                                    let isDragging = false;

                                    button.addEventListener('mousedown', (e) => {
                                        isDragging = true;
                                        e.preventDefault();
                                    });

                                    document.addEventListener('mousemove', (e) => {
                                        if (isDragging) {
                                            const sliderRect = slider.getBoundingClientRect();
                                            let newLeft = e.clientX - sliderRect.left - buttonWidth / 2;

                                            if (newLeft < padding) newLeft = padding;
                                            if (newLeft > sliderWidth - buttonWidth - padding) newLeft = sliderWidth - buttonWidth - padding;

                                            button.style.left = newLeft + 'px';

                                            const progress = (newLeft - padding) / (sliderWidth - buttonWidth - 2 * padding);
                                            slider.style.backgroundColor = `rgba(198, 209, 175, ${progress})`;
                                            text.style.opacity = 1 - progress;
                                        }
                                    });

                                    document.addEventListener('mouseup', () => {
                                        if (isDragging) {
                                            const buttonLeft = parseInt(button.style.left, 10);

                                            if (buttonLeft >= sliderWidth - buttonWidth - padding - 10) {
                                                window.location.href = '/contact-us';
                                            } else {
                                                button.style.left = padding + 'px';
                                                slider.style.backgroundColor = '#ffffff';
                                                text.style.opacity = 1;
                                            }

                                            isDragging = false;
                                        }
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End of Contact Section --}}


    <!-- Start of Footer Section -->
    <x-footer />
    <!-- End of Footer Section -->

</body>
