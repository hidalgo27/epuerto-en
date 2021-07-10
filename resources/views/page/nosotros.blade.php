@extends('default.page.app')
@section('title')
    <title>Nosotros best cusco day trips</title>
@endsection
@section('title_header')
    <h1 class="text-4xl mb-6 font-bold font-cinzel text-secondary">Epuerto Perú Travel & Tours</h1>
    <h3 class="md:text-5xl text-3xl font-medium tracking-widest text-gray-50">Welcome</h3>
    <h4 class="md:text-9xl text-5xl font-bold inset-x-0 top-0 -mt-14 text-white text-opacity-10 absolute">Welcome</h4>
@endsection
@section('content')

    <div class="grid md:grid-cols-4 grid-cols-1 lg:mx-10 mx-5 gap-10">
        <div class="md:col-span-3">
            <section class="lg:mb-20 lg:mt-24 md:my-16 my-10 lg:justify-between lg:flex">
                <div class="relative">
                    <h2 class="md:text-5xl text-3xl font-semibold z-30 text-primary relative">Welcome</h2>
                    <h4 class="md:text-8xl text-5xl font-bold inset-0 text-gray-100 text-opacity-90 absolute z-10 md:-top-10 -top-2">EPUERTO</h4>
                </div>
                <div class="block pt-6 text-right lg:mr-10">
                    <div class="transform hover:-translate-y-3 transition duration-500 ease-in-out">
                        <a href="/nosotros#contacto" class="transform hover:-translate-y-3 transition duration-500 ease-in-out rounded-full py-4 px-9 bg-secondary text-white font-semibold">CONTACT US</a>
                    </div>
                </div>
            </section>
            <section class="px-5">
                <div class="relative">
                    <div class="text-gray-500">
                        <p>We are a travel agency based on the basic fundamentals of integrity, customer service, technology, quality and prices. <span class="text-primary">Our business units consist of planning vacations to Peru</span>, we invite you to take a click-tour on our website and learn about our services.</p>
                    </div>
                    <div class="text-gray-500 py-5">
                        <p>This site is intended for information about our organization and a means to communicate with all those who plan to visit Peru and those who seek to do business with the port. We will continue to update our site with the information and the measures taken based on the fundamentals of our essence and how we will continue to have an organization based on integrity, provide superior customer service, with quality products through the uses effective technology, while making decisions to social aid and the environment.</p>
                    </div>
                    <div class="text-gray-500">
                        <p>We are continually updating our portal and we encourage you to book all your travel needs, airline tickets, hotel or all-inclusive resort vacations. Our site has it all and highly competitive prices. If you need help with your travel plans please contact our professional travel consultants to create an itinerary for you. We specialize in all destinations in Peru.<span class="text-primary"> Give us a call! All you have to do is start packing!</span></p>
                    </div>
                    <img src="{{asset('images/iconos/calidad.png')}}" class="opacity-10 absolute top-10 right-10 h-64 w-64">
                </div>
                <div class="pt-12 pb-16">
                    <span class="text-primary font-semibold text-xl">About the Administrator of Epuerto Peru <span class="text-gray-700">(Percy Chacón Guerra)</span></span>
                    <div class="grid lg:grid-cols-3 grid-cols-1 pt-5 gap-5 ">
                        <div class="flex justify-center"><img src="{{asset('images/percy.jpg')}}" class="h-full object-cover rounded-lg shadow-lg"></div>
                        <div class="lg:col-span-2 text-gray-500 pt-5 border-r border-b border-secondary border-opacity-30 px-5">
                            <p class="pb-5">Percy is a travel consultant, with over 20 years of experience in the travel industry. After graduating with a degree in Hospitality and Tourism from the School of Tourism in Peru (CENFOTUR), Percy has worked with a number of companies and design firms, in the planning and operation of tourist circuits and itineraries.</p>
                            <p class="pb-5">Percy has also led tours and worked as a tour leader for individual clients and groups, and is very familiar with the work that needs to be done in the field.</p>
                            <p class="pb-5">Epuerto Peru, his new project, is an experience that combines knowledge of life and work in the field for years, his love of travel and his professional training, with the aim of creating magic in each experience.</p>
                            <p class="pb-5">Percy lives with his family in Cusco.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="lg:my-16 md:my-16 my-5">
            <div class="md:mt-5 lg:ml-2">
                <span class="text-primary font-semibold lg:text-lg text-base mb-2">Recommended tours</span>
                @foreach ($paquetes as $paquete)
                    <a href="/en-tours/{{$paquete->url}}">
                        <div class="flex flex-cols-2 px-2 py-5 lg:gap-5 gap-2 items-center">
                            <img src="{{asset($paquete->imagen)}}" class="object-cover h-10 w-10 rounded-full transform hover:scale-150 transition duration-500">
                            <div class="lg:text-sm text-xs text-gray-500 hover:text-secondary transform hover:-translate-x-2 transition duration-500 ease-in-out">{{$paquete->titulo}}</div>
                        </div>
                    </a>
                    <hr class="mx-2">
                 @endforeach
            </div>
        </div>
    </div>
@endsection
