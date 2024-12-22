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
    <link rel="stylesheet" href="{{ asset('style/donateNow.css') }}">
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
                <h1 class="fw-normal">Donate Now: <strong>Send Your Surplus Food</strong></h1>
                <p class="fs-4 lh-sm">We greatly appreciate your willingness to help by sending surplus food directly to
                    us. Here’s how you can donate:</p>
            </div>

            <div class="row pt-2">
                <div class="types-of-food col">
                    <h2 class="fw-bold">Types of Food</h2>
                    <p class="fs-4 lh-1">We Accept We accept the following food items:</p>
                    <ul class="fs-4">
                        <li>Dry Food (rice, noodles, etc.)</li>
                        <li>Canned Food</li>
                        <li>Cooking Ingredients</li>
                        <li>Baby Food</li>
                        <li>Packaged Beverages</li>
                    </ul>
                </div>

                <div class="how-it-works col">
                    <h2 class="fw-bold">How To Donate</h2>
                    <ol class="fs-4">
                        <li><strong>Fill out the Donation Form: </strong>Provide the details of the food you wish to
                            send.</li>
                        <li><strong>Choose Delivery Method: </strong>Indicate whether you will be dropping off the
                            donation in person or if you will be sending it through a courier service.</li>
                        <li><strong>Package According to Guidelines: </strong>Please ensure your food is packaged and
                            labeled according to the provided food safety guidelines.</li>
                        <li><strong>Receive Donation Certificate: </strong>After receiving your donation, we’ll send you
                            a certificate of appreciation for your contribution.</li>
                    </ol>
                </div>
            </div>

            <div class="line my-5"></div>

        </div>
    </div>
    {{-- End of Become Partner Section --}}


    {{-- Start of Form Information Section --}}
    <div class="container-fluid">
        <div class="ms-5 me-5 mt-4 mb-5">
            <div>
                <div class="form-container">
                    <form action="/donor" method="POST">
                        @csrf
                        {{-- Donor Information --}}
                        <h2 class="fw-bold pb-2">Donor Information</h2>
                        <div class="row mb-3 d-flex align-items-center">
                            <label for="contact_name" class="col-sm-3 col-form-label form-label fs-4">Full Name<span
                                    class="required"> *</span></label>
                            <div class="col-sm-9">
                                <input type="text" id="contact_name" name="contact_name"
                                    class="form-control px-4 py-2" value="{{ old('contact_name') }}" required>
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
                            <label for="restaurant_address" class="col-sm-3 col-form-label form-label fs-4">Address<span
                                    class="required"> *</span></label>
                            <div class="col-sm-9">
                                <input type="text" id="restaurant_address" name="restaurant_address"
                                    class="form-control px-4 py-2" value="{{ old('restaurant_address') }}" required
                                    placeholder="(for confirmation purposes)">
                            </div>
                        </div>


                        {{-- Radio Button Type Food --}}
                        <div class="row mb-3 d-flex">
                            <label for="food_type" class="col-sm-3 col-form-label form-label fs-4">Type of Food<span
                                    class="required"> *</span></label>
                            <div class="col-sm-9">
                                <!-- Baris pertama -->
                                <div class="row d-flex justify-content-between pb-3">
                                    <div class="col-auto">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="food_type"
                                                id="dry_food" value="Dry Food"
                                                {{ old('food_type') == 'Dry Food' ? 'checked' : '' }} required>
                                            <label class="form-check-label fs-4" for="dry_food">
                                                Dry Food (rice, noodles, etc.)
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="food_type"
                                                id="canned_food" value="Canned Food"
                                                {{ old('food_type') == 'Canned Food' ? 'checked' : '' }} required>
                                            <label class="form-check-label fs-4" for="canned_food">
                                                Canned Food
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="food_type"
                                                id="baby_food" value="Baby Food"
                                                {{ old('food_type') == 'Baby Food' ? 'checked' : '' }} required>
                                            <label class="form-check-label fs-4" for="baby_food">
                                                Baby Food
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Baris kedua -->
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="food_type"
                                                id="cooking_ingredients" value="Cooking Ingredients"
                                                {{ old('food_type') == 'Cooking Ingredients' ? 'checked' : '' }}
                                                required>
                                            <label class="form-check-label fs-4" for="cooking_ingredients">
                                                Cooking Ingredients
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input me-3" type="radio" name="food_type"
                                                id="packaged_beverages" value="Packaged Beverages"
                                                {{ old('food_type') == 'Packaged Beverages' ? 'checked' : '' }}
                                                required>
                                            <label class="form-check-label fs-4" for="packaged_beverages">
                                                Packaged Beverages
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        {{-- Quantity of Food --}}
                        <div class="row mb-3 d-flex align-items-center">
                            <label for="quantity_food" class="col-sm-3 col-form-label form-label fs-4">Quantity of
                                Food<span class="required"> *</span></label>
                            <div class="col-sm-9">
                                <input type="text" id="quantity_food" name="quantity_food"
                                    class="form-control px-4 py-2" value="{{ old('quantity_food') }}" required>
                            </div>
                        </div>


                        {{-- Radio Button Delivery Method --}}
                        <div class="row mb-3 d-flex">
                            <label for="delivery_method" class="col-sm-3 col-form-label form-label fs-4">
                                Method of Delivery<span class="required"> *</span>
                            </label>
                            <div class="col-sm-9">
                                <div class="d-flex flex-column">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input class="form-check-input me-3" type="radio" name="delivery_method"
                                            id="drop_off" value="Drop Off"
                                            {{ old('delivery_method') == 'Drop Off' ? 'checked' : '' }} required>
                                        <label class="form-check-label fs-4" for="drop_off">
                                            I will drop off the donation at your location.
                                        </label>
                                    </div>
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-3" type="radio" name="delivery_method"
                                            id="courier_service" value="Courier Service"
                                            {{ old('delivery_method') == 'Courier Service' ? 'checked' : '' }}
                                            required>
                                        <label class="form-check-label fs-4" for="courier_service">
                                            I will send the donation via a courier service.
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>


                        {{-- Courier Service --}}
                        <div class="row mb-3 d-flex">
                            <label for="courier_serv" class="col-sm-3 col-form-label form-label fs-4">
                                Courier Service (if applicable)
                            </label>
                            <div class="col-sm-9">
                                <div class="d-flex flex-column gap-3">
                                    {{-- Input pertama --}}
                                    <div class="row align-items-center">
                                        <label for="courier_name" class="col-sm-3 col-form-label form-label fs-4">
                                            Courier Name
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="text" id="courier_name" name="courier_name"
                                                class="form-control px-4 py-2" value="{{ old('courier_name') }}">
                                        </div>
                                    </div>
                                    {{-- Input kedua --}}
                                    <div class="row align-items-center">
                                        <label for="tracking_number" class="col-sm-3 col-form-label form-label fs-4">
                                            Tracking Number (if available)
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="text" id="tracking_number" name="tracking_number"
                                                class="form-control px-4 py-2" value="{{ old('tracking_number') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        {{-- Script for radio button --}}
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const courierRadio = document.getElementById('courier_service');
                                const dropOffRadio = document.getElementById('drop_off');
                                const courierServLabel = document.querySelector('label[for="courier_serv"]');
                                const courierNameLabel = document.querySelector('label[for="courier_name"]');
                                const trackingLabel = document.querySelector('label[for="tracking_number"]');

                                function toggleRequiredLabel() {
                                    const requiredSpan = '<span class="required">*</span>';

                                    if (courierRadio.checked) {
                                        if (!courierNameLabel.innerHTML.includes(requiredSpan)) {
                                            courierNameLabel.innerHTML += requiredSpan;
                                        }

                                        if (!trackingLabel.innerHTML.includes(requiredSpan)) {
                                            trackingLabel.innerHTML += requiredSpan;
                                        }

                                        if (!courierServLabel.innerHTML.includes(requiredSpan)) {
                                            courierServLabel.innerHTML += requiredSpan;
                                        }
                                    } else {
                                        courierNameLabel.innerHTML = courierNameLabel.innerHTML.replace(requiredSpan, '');
                                        trackingLabel.innerHTML = trackingLabel.innerHTML.replace(requiredSpan, '');
                                        courierServLabel.innerHTML = courierServLabel.innerHTML.replace(requiredSpan, '');
                                    }
                                }

                                toggleRequiredLabel();

                                courierRadio.addEventListener('change', toggleRequiredLabel);
                                dropOffRadio.addEventListener('change', toggleRequiredLabel);
                            });
                        </script>





                        {{-- Agreement --}}
                        <h2 class="fw-bold pt-5">Agreement</h2>
                        <div class="container-checkbox pt-4">
                            <div class="d-flex align-items-center gap-5 pb-4">
                                <input type="checkbox" name="checkbox1" id="checkbox1" class="checkbox-custom"
                                    {{ old('checkbox1') ? 'checked' : '' }} required>
                                <label for="checkbox1" class="fs-4 lh-1"><i>I confirm that the food is properly
                                        packaged according to the safety guidelines provided.</i></label>
                            </div>

                            <div class="d-flex align-items-center gap-5 pb-4">
                                <input type="checkbox" name="checkbox2" id="checkbox2" class="checkbox-custom"
                                    {{ old('checkbox2') ? 'checked' : '' }} required>
                                <label for="checkbox2" class="fs-4 lh-1"><i>I confirm that the food I am donating is
                                        safe for consumption and meets the quality standards for donation</i></label>
                            </div>

                            <div class="d-flex align-items-center gap-5">
                                <input type="checkbox" name="checkbox3" id="checkbox3" class="checkbox-custom"
                                    {{ old('checkbox3') ? 'checked' : '' }} required>
                                <label for="checkbox3" class="fs-4"><i>I understand that by submitting this form, I
                                        am agreeing to the terms and conditions of the donation process</i></label>
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
                                                window.location.href = '/donate-now';
                                            }
                                        });
                                    }
                                });
                            </script>
                        </div>

                        <div class="btn-submit-reg d-flex justify-content-center align-items-center mt-5 pt-5 pb-5">
                            <button class="btn py-2 px-5 fs-2 fw-bold text-white" type="submit">Submit
                                Donation</button>
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
