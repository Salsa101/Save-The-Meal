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
    <link rel="stylesheet" href="{{ asset('style/donate.css') }}">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    {{-- Start of Navbar Section --}}
    <x-navbar />
    {{-- End of Navbar Section --}}


    {{-- Start of Donate To Section --}}
    <div class="container-fluid">
        <div class="ms-5 me-5 mt-4 mb-3">
            <div class="donate-to row d-flex justify-content-between align-items-center">
                <!-- Kolom Kiri -->
                <div class="col-md-5">
                    <div class="d-flex flex-column">
                        <div class="d-flex align-items-center">
                            <h1 class="title-donate-to fw-normal pe-3">Donate to</h1>
                            <h6 class="title-donate-to2 fw-bold py-2 px-3">Turn Excess into Hope</h6>
                        </div>
                        <h1 class="title-stm fw-bolder">Save The Meal.</h1>
                    </div>
                </div>

                <!-- Kolom Kanan -->
                <div class="help-us col-md-7">
                    <h5 class="ps-5 fw-normal">
                        Help us reduce food waste and provide affordable meals to those in need across Indonesia.
                        Your donation goes directly to rescuing surplus food and making a positive impact on
                        communities.
                    </h5>
                </div>
            </div>

            <div class="">
                <img src="{{ asset('image/donateImage.png') }}" style="max-width: 100%" alt="">
            </div>
        </div>
    </div>
    {{-- End of Donate To Section --}}


    {{-- Start of Ways to Donate Section --}}
    <div class="container-fluid">
        <div class="ms-5 me-5 mt-3 mb-5">
            <div class="cont-ways-donate">
                <div class="title-ways-donate d-flex align-items-center pt-4">
                    <div class="line me-3"></div>
                    <h1 class="fw-bolder">Ways to Donate</h1>
                </div>
            </div>

            {{-- Section Ways to Donate --}}
            <div class="container-fluid pt-4">
                <div class="row d-flex justify-content-between gap-4">

                    {{-- Become a Restaurant Partner --}}
                    <div class="title-content col pt-3 pb-4">
                        <h2
                            class="text-decoration-underline d-flex justify-content-center text-center pb-4 fw-bold pt-4">
                            Become a Restaurant Partner
                        </h2>

                        {{-- How it works --}}
                        <div class="how-works d-flex px-4 pb-4 pt-2">
                            <div class="row">
                                <div class="list-how-donate col-md-6">
                                    <h4 class="fw-bold">How It Works?</h4>
                                    <ul class="fs-5">
                                        <li>Register as a partner</li>
                                        <li>Set regular pickup schedule</li>
                                        <li>Input surplus food</li>
                                        <li>Get impact report</li>
                                    </ul>
                                </div>

                                <div class="col-md-6">
                                    <img src="{{ asset('image/how-donate.png') }}" style="max-width: 100%"
                                        alt="">
                                </div>
                            </div>
                        </div>

                        {{-- Partner benefits --}}
                        <div class="how-works d-flex px-4 pt-2 pb-3">
                            <div class="row pt-4">
                                <div class="col-md-6">
                                    <img src="{{ asset('image/partner-benefit.png') }}" style="max-width: 100%"
                                        alt="">
                                </div>

                                <div class="list-how-donate col-md-6">
                                    <h4 class="fw-bold">Partner Benefits:</h4>
                                    <ul class="list-donate fs-5">
                                        <li>Reduce food waste</li>
                                        <li>Positive social impact</li>
                                        <li>Contribution Certificate</li>
                                        <li>Regular impact report</li>
                                        <li>Tax deduction</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="btn-regist-now d-flex justify-content-center pt-5">
                            <a href="/register-partner">
                                <p class="fs-3 fw-bold py-2">Register Now
                                    <img class="ps-4" src="{{ asset('image/ScrollUpw.png') }}">
                                </p>
                            </a>
                        </div>
                    </div>


                    {{-- Individual Food Donation --}}
                    <div class="title-content col pt-3 pb-4">
                        <h2
                            class="text-decoration-underline d-flex justify-content-center text-center pb-4 fw-bold pt-4">
                            Individual Food Donation
                        </h2>

                        {{-- How to donate --}}
                        <div class="how-works d-flex px-4 pt-2">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="list-how-donate2 col-md-6">
                                    <h4 class="fw-bold" style="color: #0F4235">How to Donate:</h4>
                                    <ul class="fs-5">
                                        <li>Fill donation form</li>
                                        <li>Choose pickup/dropoff schedule</li>
                                        <li>Package according to guidelines</li>
                                        <li>Receive donation certificate</li>
                                    </ul>
                                </div>

                                <div class="col-md-6">
                                    <img src="{{ asset('image/how-donate2.png') }}" style="max-width: 100%"
                                        alt="">
                                </div>
                            </div>
                        </div>

                        {{-- Type Food --}}
                        <div class="how-works d-flex px-4 pt-2">
                            <div class="row pt-2">
                                <div class="col-md-6">
                                    <img src="{{ asset('image/type-food.png') }}" style="max-width: 100%"
                                        alt="">
                                </div>

                                <div class="list-how-donate col-md-6">
                                    <h4 class="fw-bold">Types of Food We Accept:</h4>
                                    <ul class="list-donate fs-5">
                                        <li>Dry food (rice, noodles, etc)</li>
                                        <li>Canned food</li>
                                        <li>Cooking ingredients</li>
                                        <li>Baby food</li>
                                        <li>Packaged beverages</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="btn-regist-now d-flex justify-content-center pt-5">
                            <a href="/donate-now">
                                <p class="fs-3 fw-bold py-2">Donate Now
                                    <img class="ps-4" src="{{ asset('image/ScrollUpw.png') }}">
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End of Ways to Donate Section --}}


    {{-- Start of Support Mission --}}
    <div class="container-fluid">
        <div class="ms-5 me-5 mt-3 mb-5">
            <div class="cont-ways-donate">
                <div class="title-ways-donate d-flex align-items-center pt-4">
                    <div class="line me-3"></div>
                    <h1 class="fw-bolder">Support Our Mission on Kitabisa.com</h1>
                </div>

                <p class="want-to-help fs-2 pt-3">Want to help us make a difference? You can easily donate through our
                    trusted partner, <i><strong>Kitabisa.com</strong></i>.</p>

                <h2 class="fw-bold">How to Donate:</h2>
                <ul class="list-how-donate fs-2">
                    <li>Visit our campaign page on <i><strong>Kitabisa.com.</strong></i></li>
                    <li>Choose your donation amount.</li>
                    <li>Complete your donation and join us in the fight against food waste and hunger.</li>
                </ul>

                <a href="https://www.kitabisa.com"
                    class="btn-kitabisa d-flex justify-content-between align-items-center my-4">
                    <div class="d-flex align-items-center gap-3">
                        <h3 class="fw-bold">Donate On</h3>
                        <img src="{{ asset('image/kitabisa.png') }}" style="height: 50px" alt="">
                    </div>
                    <img src="{{ asset('image/Arrow13.png') }}" style="height: 20px" alt="">
                </a>

                <p class="want-to-help fs-2 pt-3">Your contribution will help rescue surplus food and deliver
                    nutritious meals to those in need. Together, we can create lasting change!</p>

            </div>
        </div>
    </div>
    {{-- End of Support Mission --}}


    {{-- Start of Why Donate --}}
    <div class="container-fluid">
        <div class="ms-5 me-5 mt-3 mb-5">
            <div class="cont-ways-donate">
                <div class="title-ways-donate d-flex align-items-center pt-4">
                    <div class="line me-3"></div>
                    <h1 class="fw-bolder">Why Donate?</h1>
                </div>

                <div class="container-fluid pt-4">
                    <div class="row d-flex justify-content-between gap-3">
                        <div class="why-donate d-flex flex-column justify-content-center align-items-center col">
                            <img src="{{ asset('image/ways1.png') }}" style="max-width: 200px" alt="">

                            <div class="d-flex flex-column justify-content-center align-items-center pt-4">
                                <h2 class="fw-bold">Reduce Food Waste</h2>
                                <h5 class="text-center fw-normal">Support food rescue efforts, turning surplus into
                                    meals</h5>
                            </div>
                        </div>

                        <div class="why-donate d-flex flex-column justify-content-center align-items-center col">
                            <img src="{{ asset('image/ways2.png') }}" style="max-width: 200px" alt="">

                            <div class="d-flex flex-column justify-content-center align-items-center pt-4">
                                <h2 class="fw-bold">Feed Communities</h2>
                                <h5 class="text-center fw-normal">Provide affordable, nutritious meals to people in
                                    need</h5>
                            </div>
                        </div>

                        <div class="why-donate d-flex flex-column justify-content-center align-items-center col">
                            <img src="{{ asset('image/ways3.png') }}" style="max-width: 200px" alt="">

                            <div class="d-flex flex-column justify-content-center align-items-center pt-4">
                                <h2 class="fw-bold">Promote Sustainability</h2>
                                <h5 class="text-center fw-normal">Help reduce environmental impact by minimizing food
                                    waste</h5>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- End of Why Donate --}}


    {{-- Start of Your Impact --}}
    <div class="container-fluid">
        <div class="ms-5 me-5 mt-3 mb-5">
            <div class="cont-ways-donate">
                <div class="title-ways-donate d-flex align-items-center py-4">
                    <div class="line me-3"></div>
                    <h1 class="fw-bolder">Your Impact</h1>
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
    {{-- End of Your Impact --}}


    {{-- Start of Image Blur Section --}}
    <div class="card mb-4" style="border: none; border-radius: 0">
        <img src="{{ asset('image/bgBlur.png') }}" class="card-img" style="border: none; border-radius: 0">
        <div class="card-img-overlay d-flex justify-content-center align-items-center">
            <h1 class="card-title fw-bolder text-center text-white pt-4">“Together, we turn excess into hope <br> and
                create sustainable change”</h1>
        </div>
    </div>
    {{-- End of Image Blur Section --}}

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

    {{-- Start of Footer Section --}}
    <x-footer />
    {{-- Start of Footer Section --}}

</body>

</html>
