<style>
    .footer {
        background-color: #0F4235;
    }

    .list-links a {
        text-decoration: none;
        color: white;
    }

    .line3 {
        width: auto;
        height: 3px;
        background-color: white;
    }

    .donate-button-footer p {
        background-color: #C6D1AF;
        border-radius: 10px;
        border: 1px solid black;
        color: #0F4235;
        padding-left: 30px;
        padding-right: 30px;
    }

    .donate-button-footer a {
        text-decoration: none;
    }

    .donate-button-footer p:hover {
        box-shadow: 2px 4px 6px rgba(180, 180, 180, 0.9);
        background-color: #C6D1AF;
        color: #0F4235;
    }

    .donate-button-footer a:active {
        background-color: #C6D1AF;
        color: white;
    }
</style>

<div class="footer container-fluid">
    <div class="cont-footer ms-5 me-5 mt-5">
        <div class="row d-flex justify-content-between p-5">
            <div class="col-auto">
                <img src="{{ asset('image/footerLogo.png') }}" style="width: 250px" alt="">
                <h5 class="text-white fw-bold pt-4">Big change starts with a saved meal</h5>
                <div class="d-flex gap-3 pt-3">
                    <img src="{{ asset('image/facebook.png') }}">
                    <img src="{{ asset('image/linkedin.png') }}">
                    <img src="{{ asset('image/twitter.png') }}">
                    <img src="{{ asset('image/instagram.png') }}">
                </div>
            </div>

            <div class="col-auto d-flex" style="gap: 100px">
                {{-- Quick Link --}}
                <div class="quick-link">
                    <h4 class="fw-bold text-white pb-3">Quick Link</h4>
                    <div class="list-links d-flex flex-column fs-5 fw-light gap-2">
                        <a href="/">Home</a>
                        <a href="">About Us</a>
                        <a href="">News</a>
                        <a href="">Volunteer</a>
                        <a href="">Beneficiaries</a>
                    </div>
                </div>

                {{-- Company --}}
                <div class="company-link">
                    <h4 class="fw-bold text-white pb-3">Company</h4>
                    <div class="list-links d-flex flex-column fs-5 fw-light gap-2">
                        <a href="">Terms & Conditions</a>
                        <a href="">Privacy Policy</a>
                        <a href="">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="line3"></div>

        <div class="row d-flex justify-content-between align-items-center pt-5 pb-5">
            <div class="col-auto">
                <h4 class="text-white fw-bold">&copy; 2024 SaveTheMeal All rights reserved</h4>
            </div>

            <div class="donate-button-footer col-auto me-2">
                <a href="/donate">
                    <p class="btn fs-4 d-flex justify-content-center align-items-center fw-bolder">
                        Donate Now
                        <img class="ms-3" src="{{ asset('image/ScrollUp.png') }}" alt="">
                    </p>
                </a>
            </div>
        </div>
    </div>
</div>
