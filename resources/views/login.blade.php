@extends('master')
@section('title','Login')
@section("content")

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-white-100 overflow-hidden">


    <!-- Login Form -->
    <div class="container mx-auto flex justify-center items-center h-screen">
        <form action="{{route('login')}}" method="post" class="bg-white p-8 rounded shadow-md max-w-md w-full">
            @csrf

            <h1 class="text-3xl font-semibold mb-8 text-center">Login to Carema Account</h1>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email"
                    class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:border-blue-500"
                    required>
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password"
                    class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:border-blue-500"
                    required>
            </div>

            <button type="submit"
                class="w-full bg-blue-500 text-white p-3 rounded hover:bg-blue-600 transition duration-300">Login</button>

            <p class="text-gray-600 mt-4 text-center">
                Don't have an account? <a href="register" class="text-blue-500">Create your account</a>
            </p>
        </form>
    </div>

</body>

</html>

@endsection
