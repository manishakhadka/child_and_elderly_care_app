@extends('master')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Services | Caretaker Services</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="service.css">
</head>

<body>

    <section id="child-services" class="bg-light py-5">
        <div class="container mx-auto">
            <div class="text-center">
                <h2 class="text-3xl font-semibold text-uppercase mb-2">Child Care Packages</h2>
                <h3 class="text-muted">We offer flexible packages to meet your child care needs.</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8 ">
                <!-- Day Package -->
                <div class="max-w-md mx-auto relative">
                    <div class="bg-white rounded-lg overflow-hidden shadow-md">
                        <img class="w-full h-48 object-cover" src="https://illumine.app//srv/htdocs/wp-content/uploads/2021/01/child-care-home-1200x675-cropped.jpg"
                            alt="Child Care Day Package">
                        <div class="p-6">
                            <h4 class="text-xl font-semibold mb-2">Day Package</h4>
                            <p class="text-gray-700 text-justify">Our Child Day Package is perfect for parents who need help with
                                their children during the day. Our caretakers are trained to provide a safe and nurturing environment for your children, and can assist with activities, meals, and basic needs.</p>
                            <p class="text-blue-500 font-semibold text-2xl">Rs.1000/day</p>
                            <a href="childday" class="btn btn-primary bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded-md flex items-center justify-center mx-auto mt-4">Learn More</a>


                        </div>
                    </div>
                </div>

                <!-- Week Package -->
                <div class="max-w-md mx-auto relative">
                    <div class="bg-white rounded-lg overflow-hidden shadow-md">
                        <img class="w-full h-48 object-cover" src="https://img.freepik.com/premium-photo/mother-feeding-daughter-with-baby-formula-mug-healthy-food-child-care_73872-4162.jpg?w=740"
                            alt="Child Care Week Package">
                        <div class="p-6">
                            <h4 class="text-xl font-semibold mb-2">Week Package</h4>
                            <p class="text-gray-700 text-justify">Our Child Week Package is perfect for parents who need reliable
                                care for their children on a weekly basis. With this package, you'll get a dedicated caretaker who will take care of your child for 5 days a week, from Monday to Friday, for 8 hours each day.</p>
                            <p class="text-blue-500 font-semibold  text-2xl">Rs.5500/week</p>
							<a href="childday" class="btn btn-primary bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded-md flex items-center justify-center mx-auto mt-4">Learn More</a>

                        </div>
                    </div>
                </div>

                <!-- Month Package -->
                <div class="max-w-md mx-auto relative">
                    <div class="bg-white rounded-lg overflow-hidden shadow-md">
                        <img class="w-full h-48 object-cover" src="https://raisingchildren.net.au/__data/assets/image/0023/56453/child-care-planning-preparing-wide.jpg"
                            alt="Child Care Month Package">
                        <div class="p-6">
                            <h4 class="text-xl font-semibold mb-2">Month Package</h4>
                            <p class="text-gray-700 text-justify ">Our Child Month Package is perfect for families who need long-term
                                care for their children. This package includes a dedicated caretaker who will provide daily care for your child, including feeding, bathing, and playtime.</p>
                            <p class="text-blue-500 font-semibold  text-2xl">Rs.25000/month</p>
                            <a href="childday" class="btn btn-primary bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded-md flex items-center justify-center mx-auto mt-4">Learn More</a>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Elderly Care Section -->
			<div class="container mx-auto  mt-10">
            <div class="text-center">
			<h2 class="text-3xl font-semibold text-uppercase mb-2">Elderly Care Packages</h2>
                <h3 class="text-muted">We offer flexible packages to meet your elderly care needs.</h3>
				</div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
                <!-- Elderly Day Package -->
                <div class="max-w-md mx-auto relative overflow-hidden mt-5">
                    <div class="bg-white rounded-lg overflow-hidden shadow-md">
                        <img class="w-full h-48 object-cover" src="https://5.imimg.com/data5/SELLER/Default/2021/1/DF/JN/PZ/113033045/elderly-care-service-500x500.jpg"
                            alt="Elderly Care Day Package">
                        <div class="p-6">
                            <h4 class="text-xl font-semibold mb-2">Day Package</h4>
                            <p class="text-gray-700">8-12 Hours</p>
							<p class="text-gray-700 text-justify">
Our Elderly Day Package is ideal for families seeking support for their senior members throughout the day. Our caregivers are skilled in creating a secure and compassionate atmosphere for the elderly, offering assistance with various activities, meals, and essential daily requirements.</p>
                            <p class="text-blue-500 font-semibold text-2xl">Rs.1200/day</p>
							<a href="childday" class="btn btn-primary bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded-md flex items-center justify-center mx-auto mt-4">Learn More</a>

                        </div>
                    </div>
                </div>

                <!-- Elderly Week Package -->
                <div class="max-w-md mx-auto relative overflow-hidden mt-5">
                    <div class="bg-white rounded-lg overflow-hidden shadow-md">
                        <img class="w-full h-48 object-cover" src="https://cdn.visitingangels.com/cgcimages/111-16x7-16x7.jpg"
                            alt="Elderly Care Week Package">
                        <div class="p-6">
                            <h4 class="text-xl font-semibold mb-2">Week Package</h4>
                            <p class="text-gray-700">6 Days</p>
							<p class="text-gray-700 text-justify">
							Our Elderly Week Package is designed for families requiring consistent care for their senior members on a weekly basis. This comprehensive package provides a dedicated caregiver who will attend to your elderly loved one five days a week.</p>
                            <p class="text-blue-500 font-semibold  text-2xl">Rs.7000/week</p>
							<a href="childday" class="btn btn-primary bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded-md flex items-center justify-center mx-auto mt-4">Learn More</a>

                        </div>
                    </div>
                </div>

                <!-- Elderly Month Package -->
                <div class="max-w-md mx-auto relative overflow-hidden mt-5">
                    <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <img class="w-full h-48 object-cover" src="https://www.choosecomforthome.com/wp-content/uploads/2016/05/elderly-personal-care.jpg"
                            alt="Elderly Care Week Package">
                        <div class="p-6">
                        <h4 class="text-xl font-semibold mb-2">Month Package</h4>
                            <p class="text-gray-700">4 Weeks</p>
							<p class="text-gray-700 text-justify">
							Our Elderly Month Package is tailored for families seeking extended and continuous care for their senior members. This comprehensive package features a committed caregiver who will offer daily assistance ensuring the well-being of your elderly loved one throughout the month</p>
                            <p class="text-blue-500 font-semibold  text-2xl">Rs.25000/week</p>
							<a href="childday" class="btn btn-primary bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded-md flex items-center justify-center mx-auto mt-4">Learn More</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
</html>
@endsection
