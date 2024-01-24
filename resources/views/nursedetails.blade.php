@extends('master')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="flex-1 md:ml-64">
        <div class="flex flex-col lg:flex-row md:flex-col p-10 md:mt-10">
            <div class="lg:w-1/2 md:p-0 lg:p-10 md:mt-0">
                @foreach ($data as $record => $value)

                @if ($value->photo)
                <img src="{{ URL::to($value->photo) }}" alt="Image" class="w-full object-cover" style="max-height: 300px;">
                @endif

                <div class="grid grid-cols-2 gap-4 mt-5">
                   
                    @if ($value->citizenship_photo)
                    <div>
                        <img src="{{ URL::to($value->citizenship_photo) }}" alt="Citizenship Photo"
                            class="w-full h-full object-cover">
                    </div>
                    @endif

                    @if ($value->certificate_photo)
                    <div>
                        <img src="{{ URL::to($value->certificate_photo) }}" alt="Certificate Photo"
                            class="w-full h-full object-cover">
                    </div>
                    @endif
                </div>

            </div>
            <div class="lg:w-1/2 md:p-5 lg:p-20 space-y-4">
                <div class="text-3xl font-bold">
                    Hi, I'm {{ $value->name }} <br>
                </div>
                <div class="text-3xl font-bold">
                    {{ $value->address }} <br>
                    {{ $value->phone }} <br>
                </div>

                <!-- Hire Me Button -->
                <button class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded-md">Hire Me</button>

                @endforeach
            </div>
        </div>
    </div>

    <!-- The rest of your HTML content here -->

</body>

</html>
@endsection
