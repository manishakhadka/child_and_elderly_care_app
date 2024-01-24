@extends('master')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Carema - Day Package for Children</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="childday.css">
</head>
<body class="bg-white-100">

<div class="container mx-auto py-8">
    <main class="flex max-w-4xl mx-auto bg-white p-8 rounded-md shadow-md">
        <div class="day-package-container text-center flex-1">
            <div class="mb-4">
                <h2 class="text-3xl font-semibold mb-4">Day Package for Children</h2>
                <img class="rounded-md" src="https://illumine.app//srv/htdocs/wp-content/uploads/2021/01/child-care-home-1200x675-cropped.jpg" alt="Day Package for Children">
                <p class="text-gray-700 mb-4">Our day package for children is perfect for parents who need occasional care for their children during the day. Our trained caretakers will take care of your children and provide a range of services such as playing games, reading stories, preparing meals, and more.</p>
                <h3 class="text-xl font-semibold mb-2">Package Details:</h3>
                <ul class="list-disc pl-6 mb-4">
                    <li>Available from Monday to Friday</li>
                    <li>8-12 hours of care per day</li>
                    <li>Includes snacks and meals</li>
                    <li>Price: Rs.800 per day</li>
                </ul>
            </div>
        </div>

        <div class="w-1/3 ml-8">
            <form class="package-buy-form" action="buypackage" method="post">
                @csrf
                <h3 class="text-xl font-semibold mb-2">Book a Package:</h3>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name:</label>
                <input type="text" id="name" name="name" required
                       class="w-full p-2 border border-gray-300 rounded-md mb-4">

                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email:</label>
                <input type="email" id="email" name="email" required
                       class="w-full p-2 border border-gray-300 rounded-md mb-4">

                <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone:</label>
                <input type="tel" id="phone" name="phone" required
                       class="w-full p-2 border border-gray-300 rounded-md mb-4">

                <label for="textarea" class="block text-sm font-medium text-gray-700 mb-1">Address:</label>
                <textarea id="address" name="address" rows="5" cols="45"
                          class="w-full p-2 border border-gray-300 rounded-md mb-4"></textarea>

                <label for="date" class="block text-sm font-medium text-gray-700 mb-1">Date:</label>
                <input type="date" id="date" name="date" required
                       class="w-full p-2 border border-gray-300 rounded-md mb-4">

                <label for="appt" class="block text-sm font-medium text-gray-700 mb-1">From:</label>
                <input type="time" id="appt" name="from"
                       class="w-full p-2 border border-gray-300 rounded-md mb-4">

                <label for="appt_to" class="block text-sm font-medium text-gray-700 mb-1">To:</label>
                <input type="time" id="appt_to" name="to"
                       class="w-full p-2 border border-gray-300 rounded-md mb-4">

                <input type="submit" value="Buy"
                       class="bg-blue-500 text-white font-semibold px-4 py-2 rounded-md hover:bg-blue-600">
            </form>
        </div>
    </main>
</div>

</body>
</html>
@endsection
