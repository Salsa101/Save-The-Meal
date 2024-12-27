<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Save The Meal | Register Partners</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900;1000&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/style/registerPartner.css">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- Start of Navbar Section --}}
    <x-navbar />
    {{-- End of Navbar Section --}}

    {{-- Start of Become Partner Section --}}
    <div class="container-fluid">
        <div class="ms-5 me-5 mt-3">
            <div class="cont-become-partner pt-3 lh-sm">
                <h1 class="fw-normal">Become a <strong>Partner</strong></h1>
                <p class="fs-4 lh-sm">Thank you for your interest in joining our mission to reduce food waste and
                    support those in need. By becoming a partner, you’ll help rescue surplus food and make a real impact
                    in the community.</p>
            </div>

            <div class="row pt-2">
                <div class="col">
                    <img src="{{ asset('image/Rectangle76.png') }}" style="max-width: 100%;" alt="">
                </div>

                <div class="how-it-works col">
                    <h2 class="fw-bold">How It Works</h2>
                    <ol class="fs-4">
                        <li>Register: Fill out the form below with your business details.</li>
                        <li>Verification: Once submitted, we will verify your information.</li>
                        <li>Confirmation: If everything is in order, we will contact you via WhatsApp for further steps.
                        </li>
                    </ol>
                </div>
            </div>

            <div class="line my-4"></div>

        </div>
    </div>
    {{-- End of Become Partner Section --}}


    {{-- Start of Form Information Section --}}
    <div class="container-fluid">
        <div class="ms-5 me-5 mt-4 mb-5">
            <div>
                <div class="form-container">
                    <form action="/partner" method="POST">
                        @csrf
                        {{-- Restaurant --}}
                        <h2 class="fw-bold pb-2">Restaurant/Business Information</h2>
                        <div class="row mb-3 d-flex align-items-center">
                            <label for="business_name" class="col-sm-3 col-form-label form-label fs-4">Business
                                Name<span class="required"> *</span></label>
                            <div class="col-sm-9">
                                <input type="text" id="business_name" name="business_name"
                                    class="form-control px-4 py-2" value="{{ old('business_name') }}" required>
                            </div>
                        </div>

                        <div class="row mb-3 d-flex align-items-center">
                            <label for="restaurant_address" class="col-sm-3 col-form-label form-label fs-4">Restaurant
                                Address<span class="required"> *</span></label>
                            <div class="col-sm-9">
                                <input type="text" id="restaurant_address" name="restaurant_address"
                                    class="form-control px-4 py-2" value="{{ old('restaurant_address') }}" required>
                            </div>
                        </div>

                        <div class="row mb-3 d-flex align-items-center">
                            <label for="business_phone" class="col-sm-3 col-form-label form-label fs-4">Phone
                                Number<span class="required"> *</span></label>
                            <div class="col-sm-9">
                                <input type="tel" id="business_phone" name="business_phone"
                                    class="form-control px-4 py-2" value="{{ old('business_phone') }}" required>
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
                            <label for="website" class="col-sm-3 col-form-label form-label fs-4">Website/Social
                                Media</label>
                            <div class="col-sm-9">
                                <input type="url" id="website" name="website" class="form-control px-4 py-2"
                                    value="{{ old('website') }}">
                            </div>
                        </div>


                        {{-- Contact Person --}}
                        <h2 class="fw-bold pt-3 pb-2">Contact Person Information</h2>
                        <div class="row mb-3 d-flex align-items-center">
                            <label for="contact_name" class="col-sm-3 col-form-label form-label fs-4">Full Name<span
                                    class="required"> *</span></label>
                            <div class="col-sm-9">
                                <input type="text" id="contact_name" name="contact_name"
                                    class="form-control px-4 py-2" value="{{ old('contact_name') }}" required>
                            </div>
                        </div>

                        <div class="row mb-3 d-flex align-items-center">
                            <label for="position" class="col-sm-3 col-form-label form-label fs-4">Position<span
                                    class="required"> *</span></label>
                            <div class="col-sm-9">
                                <input type="text" id="position" name="position" class="form-control px-4 py-2"
                                    value="{{ old('position') }}" required placeholder="(Owner, Manager, etc.)">
                            </div>
                        </div>

                        <div class="row mb-3 d-flex align-items-center">
                            <label for="contact_phone" class="col-sm-3 col-form-label form-label fs-4">Phone
                                Number<span class="required"> *</span></label>
                            <div class="col-sm-9">
                                <input type="tel" id="contact_phone" name="contact_phone"
                                    class="form-control px-4 py-2" value="{{ old('contact_phone') }}" required>
                            </div>
                        </div>

                        <div class="row mb-3 d-flex align-items-center">
                            <label for="contact_email" class="col-sm-3 col-form-label form-label fs-4">Email
                                Address<span class="required"> *</span></label>
                            <div class="col-sm-9">
                                <input type="email" id="contact_email" name="contact_email"
                                    class="form-control px-4 py-2" value="{{ old('contact_email') }}" required>
                            </div>
                        </div>


                        {{-- Operational Details --}}
                        <h2 class="fw-bold pt-3 pb-2">Operational Details</h2>
                        <div class="row mb-3 d-flex align-items-center">
                            <label for="food_type" class="col-sm-3 col-form-label form-label fs-4">Type of Food
                                You Offer<span class="required"> *</span></label>
                            <div class="col-sm-9">
                                <input type="text" id="food_type" name="food_type" class="form-control px-4 py-2"
                                    value="{{ old('food_type') }}" required
                                    placeholder="(e.g., daily meals, surplus items, etc.)">
                            </div>
                        </div>

                        <div class="row mb-3 d-flex align-items-center">
                            <label for="surplus_food" class="col-sm-3 col-form-label form-label fs-4 lh-1">Approximate
                                Amount of Surplus Food
                                Available<span class="required"> *</span></label>
                            <div class="col-sm-9">
                                <input type="text" id="surplus_food" name="surplus_food"
                                    class="form-control px-4 py-2" value="{{ old('surplus_food') }}" required
                                    placeholder="(per day)">
                            </div>
                        </div>

                        <div class="row mb-3 d-flex align-items-center">
                            <label for="pickup_schedule"
                                class="col-sm-3 col-form-label form-label fs-4 lh-1">Preferred
                                Pickup Schedule<span class="required"> *</span></label>
                            <div class="col-sm-9">
                                <input type="text" id="pickup_schedule" name="pickup_schedule"
                                    class="form-control px-4 py-2" value="{{ old('pickup_schedule') }}" required
                                    placeholder="(time of day)">
                            </div>
                        </div>


                        {{-- Checkbox --}}
                        <div class="container-checkbox pt-5">
                            <div class="d-flex align-items-center gap-5 pb-5">
                                <input type="checkbox" name="checkbox1" id="checkbox1" value="1"
                                    class="checkbox-custom" {{ old('checkbox1') ? 'checked' : '' }} required>
                                <label for="checkbox1" class="fs-4 lh-1"><i>I confirm that the food donated will be
                                        safe for consumption and that I will follow the food safety guidelines
                                        provided.</i></label>
                            </div>

                            <div class="d-flex align-items-center gap-5">
                                <input type="checkbox" name="checkbox2" id="checkbox2" value="1"
                                    class="checkbox-custom" {{ old('checkbox2') ? 'checked' : '' }} required>
                                <label for="checkbox2" class="fs-4"><i>I agree to be contacted via WhatsApp once my
                                        registration is verified.</i></label>
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
                                            title: 'Thank You for Registering as Our Partner!',
                                            text: 'Your submission has been received. We’ll review your application and contact you via WhatsApp shortly.',
                                            html: `
                                                    <p>If you have any questions, feel free to reach out:</p>
                                                    <ul>
                                                        <li>Email: <a>savethemeal@gmail.com</a></li>
                                                        <li>WhatsApp: <a href="https://wa.me/1234567890">https://wa.me/1234567890</a></li>
                                                    </ul>
                                                    <p>Thank you for joining us in making a difference!</p>
                                                    `,
                                            confirmButtonText: 'Close',
                                            confirmButtonColor: '#0F4235',
                                            allowOutsideClick: false,
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                window.location.href = '/register-partner';
                                            }
                                        });
                                    }
                                });
                            </script>
                        </div>

                        <div class="btn-submit-reg d-flex justify-content-center align-items-center mt-5 pt-5 pb-5">
                            <button class="btn py-2 px-5 fs-2 fw-bold text-white" type="submit">Submit
                                Registration</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    {{-- End of Form Information Section --}}


    {{-- Start of Footer Section --}}
    <x-footer />
    {{-- End of Footer Section --}}
</body>

</html>
