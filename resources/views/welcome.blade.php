@extends('master')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Include Swiper.css -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>

<body>

    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide"><img src="/images/1.jpg" alt="" srcset=""></div>
            <div class="swiper-slide"><img src="/images/2.jpg" alt="" srcset=""></div>
            <div class="swiper-slide"><img src="/images/3.jpg" alt="" srcset=""></div>
            <!-- ... -->
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
    </div>

    <!-- Example Div with Image and Text -->
    <div class="flex max-w-screen-xl mx-auto mt-10 mb-10">
        <!-- Logo on the Left Side -->
        <div class="w-full md:w-1/3">
            <img src="images/life.jpg" alt="CareApp Logo" class="w-full h-auto">
        </div>

        <!-- Text Content on the Right Side -->
        <div class="bg-white p-8 rounded-lg  w-full md:w-2/3">
            <p class="text-lg text-gray-700 mb-4">
                Carema is a powerful communication and engagement platform for aged care providers. It brings providers,
                residents, carers, and families together to build a wonderful care community and support seniors and childs to love
                the way they live.
            </p>
             </div>
    </div>

</body>

</html>

@endsection
