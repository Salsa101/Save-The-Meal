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
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>


<body>
    {{-- Start of Navbar Section --}}
    <x-navbar />
    {{-- End of Navbar Section --}}

    {{-- Start of Detail Section --}}
    <div class="container-fluid">
        <div class="cont-vol ms-5 mt-5 me-5 mb-5">
            <div>
                <div class="text-title d-flex flex-column justify-content-center align-items-center">
                    <h1 class="fw-bolder pb-2" style="font-size: 45px;">{{ $item->title }}</h1>
                    <div style="font-size: 18px;">
                        <p>by <strong>{{ $item->author }}<span class="fw-normal"> |
                                    {{ $item->time->diffForHumans() }}</span></strong></p>
                    </div>
                </div>

                <img src="{{ asset('image/donateImage.png') }}" class="card-img-top pt-5" style="max-width: 100%">
                <div class="mt-3">
                    <p class="pt-3 fs-5 card-desc" style="text-align: justify">{{ $item->description }}</p>
                </div>
            </div>
        </div>
    </div>
    {{-- End of Detail Section --}}

    {{-- Start of Footer Section --}}
    <x-footer/>
    {{-- End of Footer Section --}}
</body>

</html>
