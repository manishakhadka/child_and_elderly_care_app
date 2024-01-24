@extends('master')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register as Nurse</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <div class="content">
        <div class="container mx-auto mt-8">
            <div class="max-w-md mx-auto bg-white p-8 rounded shadow-md">
                <h2 class="text-2xl font-semibold mb-6 text-center">Register as Care Taker</h2>
                <form method="POST" action="/upload/upload" enctype="multipart/form-data" class="contact-content">
                    @csrf

                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                        <input type="text" id="name" name="name" class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:border-blue-500" required>
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                        <input type="email" id="email" name="email" class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:border-blue-500" required>
                    </div>

                    <div class="mb-4">
                        <label for="address" class="block text-gray-700 text-sm font-bold mb-2">Address:</label>
                        <input type="text" id="address" name="address" class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:border-blue-500" required>
                    </div>

                    <div class="mb-4">
                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password:</label>
                        <input type="password" id="password" name="password" placeholder="Password" class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:border-blue-500" required>
                    </div>

                    <div class="mb-4">
                        <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">Phone:</label>
                        <input type="text" id="phone" name="phone" class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:border-blue-500" required>
                    </div>

                    <div class="mb-4">
                        <label for="photo" class="block text-gray-700 text-sm font-bold mb-2">Upload Photo:</label>
                        <input type="file" id="photo" name="photo[]" class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:border-blue-500" required>
                    </div>

                    <div class="mb-4">
                        <label for="citizenship_photo" class="block text-gray-700 text-sm font-bold mb-2">Choose Citizen Photo:</label>
                        <input type="file" id="citizenship_photo" name="citizenship_photo[]" multiple class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:border-blue-500" required>
                    </div>

                    <div class="mb-4">
                        <label for="certificate_photo" class="block text-gray-700 text-sm font-bold mb-2">Choose Certificate Photo:</label>
                        <input type="file" id="certificate_photo" name="certificate_photo[]" multiple class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:border-blue-500" required>
                    </div>

                    <button type="submit" class="w-full bg-blue-500 text-white p-3 rounded hover:bg-blue-600 transition duration-300">Register</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
@endsection
