@extends('master')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Caretaker Services</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="font-sans bg-gray-100">


    <!-- About Us Section for Elderly Care -->
    <section class="py-12 bg-white px-4">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div class="md:order-2">
                    <img src="images/elderlycare.jpg" alt="Elderly Care Image" class="w-full h-full object-cover mb-4 rounded">
                </div>
                <div class="md:order-1 text-justify">
                    <h2 class="text-3xl font-semibold mb-4">About Us - Elderly Care</h2>
                    <p class="text-gray-700 mb-4">
                        At Caretaker Services, we understand the unique needs of elderly individuals. Our team of
                        dedicated caregivers is committed to providing compassionate and personalized care to ensure the
                        well-being and comfort of our elderly clients.
                    </p>
                    <p class="text-gray-700">
                        Whether it's assistance with daily activities, companionship, or specialized care, we are here
                        to support elderly individuals and their families. Our mission is to enhance the quality of life
                        for our elderly clients and create a nurturing environment that promotes independence and
                        dignity.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section for Child Care -->
    <section class="py-12 bg-gray-200 px-4">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div class="md:order-2">
                    <img src="images/childcare.jpg" alt="Child Care Image" class="w-full h-full object-cover mb-4 rounded">
                </div>
                <div class="md:order-1 text-justify">
                    <h2 class="text-3xl font-semibold mb-4">About Us - Child Care</h2>
                    <p class="text-gray-700 mb-4">
                        Our Child Care Services are designed to provide a safe and nurturing environment for children.
                        Our team of experienced caregivers is dedicated to fostering the growth, development, and
                        happiness of each child entrusted to our care.
                    </p>
                    <p class="text-gray-700">
                        We offer flexible child care packages to meet the unique needs of families. From day packages
                        to week and month packages, our goal is to support parents and provide children with enriching
                        experiences in a caring and secure setting.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    

</body>

</html>
@endsection
