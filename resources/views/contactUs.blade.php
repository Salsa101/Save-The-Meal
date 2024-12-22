<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Save The Meal | Contact Us</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900;1000&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style/contactUs.css') }}">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    {{-- Start of Navbar Section --}}
    <x-navbar />
    {{-- End of Navbar Section --}}


    {{-- Start of Contact Section --}}
    <div class="container-fluid">
        <div class="ms-5 me-5 mt-4">
            <div class="row pt-2 gap-3">
                <div class="img-contact col">
                    <img src="{{ asset('image/contact-us.png') }}" style="max-width: 100%" alt="">

                    <div class="contact-card mt-4">
                        <div class="contact-item px-5">
                            <img src="{{ asset('image/letter.png') }}" class="contact-img pe-4">
                            <div class="contact-text">
                                <div>Email:</div>
                                <strong><u>savethemeal@gmail.com</u></strong>
                            </div>
                        </div>
                        <div class="contact-item px-5">
                            <img src="{{ asset('image/phone.png') }}" class="contact-img pe-4">
                            <div class="contact-text">
                                <div>Phone:</div>
                                <strong>+62 8123 456 7890</strong>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-contact col">
                    <h2 class="fw-normal">We'd Love to</h2>
                    <h1 class="fw-bold">Hear From You!</h1>
                    <p class="fs-4 lh-1 pt-4">Have questions or feedback? We're here to help. Send us a message, and
                        we'll respond within 24 hours</p>

                    <div class="line my-4"></div>

                    <form action="/contact" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="firstName" class="form-label fs-4">First Name<span
                                    class="required"> *</span></label>
                                <input type="text" name="firstName" class="form-control px-4" id="firstName" placeholder="John" required>
                            </div>
                            <div class="col-md-6">
                                <label for="lastName" class="form-label fs-4">Last Name<span
                                    class="required"> *</span></label>
                                <input type="text" name="lastName"  class="form-control px-4" id="lastName" placeholder="Doe" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label fs-4">Email Address<span
                                class="required"> *</span></label>
                            <input type="email" name="email" class="form-control px-4" id="email"
                                placeholder="example@gmail.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label fs-4">Message<span
                                class="required"> *</span></label>
                            <textarea class="form-control px-4 py-3" name="message" id="message" rows="12" placeholder="Leave us a message..." style="resize: none;" required></textarea>
                        </div>


                        {{-- Pesan Sukses --}}
                        <div>
                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    var successMessage = '{{ session('success') }}';
                                    if (successMessage) {
                                        Swal.fire({
                                            icon: 'success',
                                            title: 'Thank you for reaching out!',
                                            text: 'Your message has been received and we will get back to you shortly.',
                                            confirmButtonText: 'Close',
                                            confirmButtonColor: '#0F4235',
                                            allowOutsideClick: false,
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                window.location.href = '/contact-us';
                                            }
                                        });
                                    }
                                });
                            </script>
                        </div>


                        <div class="button-submit d-flex justify-content-center mt-5">
                            <button type="submit" class="btn fs-4 fw-bold py-2 text-white">Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- End of Contact Section --}}


    {{-- Start of Footer Section --}}
    <x-footer />
    {{-- End of Footer Section --}}
</body>

</html>
