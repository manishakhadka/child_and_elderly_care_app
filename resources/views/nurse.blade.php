@extends('master')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nurse Details</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<div class="container mx-auto max-w-lg mt-8 px-4">
    <div class="grid grid-cols-1">
        @foreach ($data as $nurse => $value)
            <div class="relative bg-white p-6 rounded-lg shadow-md flex items-center justify-center mb-8">
                @php
                    $imageArray = explode('|', $value->photo);
                @endphp
                <div class="w-full mb-4 text-center">
                    @foreach ($imageArray as $image)
                        <img src="{{ URL::to($image) }}" alt="Nurse Image" class="h-48 w-auto object-cover mb-2 rounded">
                    @endforeach
                </div>
                <div class="w-full text-center">
                    <h3 class="text-xl font-semibold mb-2">{{ $value->name }}</h3>
                    <p class="text-gray-600 mb-2">{{ $value->email }}</p>
                    <p class="text-gray-600 mb-2">{{ $value->phone }}</p>
                    <p class="text-gray-600 mb-4">{{ $value->address }}</p>
                    <a href="nursedetails/{{ $value->id }}" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded-md inline-block">More Information</a>
                </div>
            </div>
        @endforeach
    </div>
</div>

</body>
</html>

@endsection
