<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Save The Meal | Beneficiaries</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900;1000&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/style/beneficiaries.css">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    {{-- Start of Navbar Section --}}
    <x-navbar />
    {{-- End of Navbar Section --}}


    {{-- Start of Become Recipient Section --}}
    <div class="container-fluid">
        <div class="ms-5 me-5 mt-3">
            <div class="cont-become-partner pt-3 lh-sm">
                <h1 class="fw-normal">Become a <strong>Recipient </strong>of Our Food Assistance Program</h1>
                <p class="fs-4 lh-sm">If you or your community needs support, we’re here to help. Register today and
                    join our mission to fight hunger and reduce food waste.</p>
            </div>

            <div class="row pt-2">
                <div class="col">
                    <img src="{{ asset('image/beneimg.png') }}" style="max-width: 100%;" alt="">
                </div>

                <div class="how-it-works col">
                    <h2 class="fw-bold">How the Program Works</h2>
                    <ol class="fs-4">
                        <li><strong>Register:</strong> Fill out the application form with your information.</li>
                        <li><strong>Verification:</strong> We will review and verify your needs.</li>
                        <li><strong>Receive Assistance:</strong> Approved beneficiaries will receive food assistance on
                            a regular basis.
                        </li>
                        <li><strong>Stay Connected:</strong> Share feedback or testimonials to help us improve.
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    {{-- End of Become Recipient Section --}}


    {{-- Start of Eligible Section --}}
    <div class="container-fluid">
        <div class="ms-5 me-5 mt-3 mb-5">
            <div class="cont-ways-donate">
                <div class="title-ways-donate d-flex align-items-center pt-4">
                    <div class="line1 me-3"></div>
                    <h1 class="fw-bolder">Who Is Eligible?</h1>
                </div>

                <div class="container-fluid pt-4">
                    <div class="row d-flex justify-content-between align-items-start">
                        <div class="d-flex flex-column justify-content-center align-items-center col">
                            <img src="{{ asset('image/eligible1.png') }}" style="max-width: 100%">
                            <h4 class="fw-bold text-center pt-4">Individuals or families in need of food assistance.
                            </h4>
                        </div>


                        <div class="d-flex flex-column justify-content-center align-items-center col">
                            <img src="{{ asset('image/eligible2.png') }}" style="max-width: 100%" alt="">
                            <h4 class="fw-bold text-center pt-4">Communities or organizations supporting underserved
                                groups.
                            </h4>
                        </div>

                        <div class="d-flex flex-column justify-content-center align-items-center col">
                            <img src="{{ asset('image/eligible3.png') }}" style="max-width: 100%" alt="">
                            <h4 class="fw-bold text-center pt-4">Must reside within our service area.</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End of Eligible Section --}}


    {{-- Start of Registration Form Section --}}
    <div class="container-fluid">
        <div class="ms-5 me-5 mt-4 mb-5">
            <div class="line my-5"></div>
            <div>
                <div class="form-container">
                    <form action="/beneficiary" method="POST">
                        @csrf
                        {{-- Registration Form --}}
                        <h1 class="regist-form-title fw-bold">Registration Form Section</h1>
                        <h4 class="pb-5 fw-normal">A simple form for beneficiaries to apply</h4>
                        <div class="row mb-3 d-flex align-items-center">
                            <label for="full_name" class="col-sm-3 col-form-label form-label fs-4">Full Name<span
                                    class="required"> *</span></label>
                            <div class="col-sm-9">
                                <input type="text" id="full_name" name="full_name"
                                    class="form-control px-4 py-2" value="{{ old('full_name') }}" required
                                    placeholder="Name of individual or organization">
                            </div>
                        </div>

                        <div class="row mb-3 d-flex align-items-center">
                            <label for="phone_number" class="col-sm-3 col-form-label form-label fs-4">Phone
                                Number<span class="required"> *</span></label>
                            <div class="col-sm-9">
                                <input type="tel" id="phone_number" name="phone_number"
                                    class="form-control px-4 py-2" value="{{ old('phone_number') }}" required>
                            </div>
                        </div>

                        <div class="row mb-3 d-flex align-items-center">
                            <label for="email_address" class="col-sm-3 col-form-label form-label fs-4">Email
                                Address<span class="required"> *</span></label>
                            <div class="col-sm-9">
                                <input type="email" id="email_address" name="email_address"
                                    class="form-control px-4 py-2" value="{{ old('email_address') }}" required
                                    placeholder="example@gmail.com">
                            </div>
                        </div>

                        <div class="row mb-3 d-flex align-items-center">
                            <label for="address" class="col-sm-3 col-form-label form-label fs-4">Address<span
                                    class="required"> *</span></label>
                            <div class="col-sm-9">
                                <input type="text" id="address" name="address"
                                    class="form-control px-4 py-2" value="{{ old('address') }}" required
                                    placeholder="(for confirmation purposes)">
                            </div>
                        </div>

                        <div class="row mb-3 d-flex align-items-start">
                            <label for="reason_apply" class="col-sm-3 col-form-label form-label fs-4">Reason for
                                Application<span class="required"> *</span></label>
                            <div class="col-sm-9">
                                <textarea class="form-control px-4 py-3" name="reason_apply" id="reason_apply" rows="8" style="resize: none;"
                                    required></textarea>
                            </div>
                        </div>

                        {{-- Success Message --}}
                        <div>
                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    var successMessage = '{{ session('success') }}';
                                    if (successMessage) {
                                        Swal.fire({
                                            icon: 'success',
                                            title: 'Thank You for Your Donation!',
                                            text: 'We’ve received your donation details',
                                            html: `
                                                    <p>Next Steps:</p>
                                                    <ul>
                                                        <li>Send via Courier: Ship your package to: <strong>Jl. Kebon Jeruk Raya No. 10, Jakarta Barat, 11530</strong> Share the tracking number with us via <strong><i>WhatsApp.</i></strong></li>
                                                        <li>Drop-off: We’ll contact you soon via WhatsApp to arrange the drop-off.</li>
                                                    </ul>
                                                    `,
                                            confirmButtonText: 'Close',
                                            confirmButtonColor: '#0F4235',
                                            allowOutsideClick: false,
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                window.location.href = '/beneficiaries';
                                            }
                                        });
                                    }
                                });
                            </script>
                        </div>

                        <div class="btn-submit-reg d-flex justify-content-center align-items-center mt-5 pt-5">
                            <button class="btn py-2 px-5 fs-2 fw-bold text-white" type="submit">Submit
                                Application</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- End of Registration Form Section --}}


    {{-- Start of FaQ Section --}}
    <div class="container-fluid">
        <div class="ms-5 me-5 mt-4 mb-5">
            <div class="line my-4"></div>

            <div class="title-news d-flex justify-content-start align-items-center pt-4">
                <div class="line2 me-3"></div>
                <h1 class="faq-title fw-bolder">Frequently Asked Questions (FAQ)</h1>
            </div>

            <div class="accordion mt-5" id="accordionPanelsStayOpenExample">
                {{-- Accordion 1 --}}
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button fs-3 fw-bolder p-4" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                            aria-controls="panelsStayOpen-collapseOne">
                            How long does the approval process takes?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                        <div class="accordion-body fs-5">
                            Typically, it takes 3-5 working days.
                        </div>
                    </div>
                </div>

                {{-- Accordion 2 --}}
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed fs-3 fw-bolder p-4" type="button"
                            data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo"
                            aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                            What kind of food will I receive?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                        <div class="accordion-body fs-5">
                            Typically, it takes 3-5 working days.
                        </div>
                    </div>
                </div>

                {{-- Accordion 3 --}}
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed fs-3 fw-bolder p-4" type="button"
                            data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree"
                            aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                            Can I apply for someone else?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                        <div class="accordion-body fs-5">
                            Typically, it takes 3-5 working days.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End of FaQ Section --}}


    {{-- Start of Testi Section --}}
    <div class="container-fluid">
        <div class="ms-5 me-5 mt-3 mb-5">

            <div class="title-news d-flex justify-content-start align-items-center py-3">
                <div class="line2 me-3"></div>
                <h1 class="faq-title fw-bolder">What Our Beneficiaries Say</h1>
            </div>

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
    {{-- End of Testi Section --}}


    {{-- Start of Contact Section --}}
    <div class="container-fluid">
        <div class="ms-5 me-5 mt-3 mb-5">

            <div class="title-news d-flex justify-content-start align-items-center py-3">
                <div class="line2 me-3"></div>
                <h1 class="faq-title fw-bolder">Have Questions?</h1>
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
    {{-- End of Contact Section --}}


    {{-- Start of Footer Section --}}
    <x-footer />
    {{-- End of Footer Section --}}


</body>
