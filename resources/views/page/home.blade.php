@extends('default.page.app')
@section('title')
    <title>Best Cusco tours and day trips - Epuerto Travel agency Perú</title>
@section('title_header')
    <h1 class="text-4xl mb-6 font-bold font-cinzel text-secondary">Epuerto Perú Travel & Tours</h1>
    <h3 class="md:text-5xl text-3xl font-medium tracking-widest text-gray-50">UNIQUE EXPERIENCES AND CONNECTIONS <br> LIKE NO OTHER.</h3>
    <h4 class="md:text-9xl text-5xl font-bold inset-x-0 top-0 -mt-14 text-white text-opacity-10 absolute">EPUERTO</h4>
@endsection
@endsection
@section('content')
    <section class="mb-12 grid grid-cols-2 sm:grid-cols-8 px-24 gap-12 sm:gap-16 bg-gray-100 py-6">
        <div class="">
            <a class="venobox block relative group" data-gall="myGallery" framewidth="100" href="{{asset('doc/marca-peru.jpg')}}">
                <img src="{{asset('images/logos/marca-peru.png')}}" alt="" class="object-contain">
                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="bg-primary bg-opacity-70 p-1 rounded-md h-8 w-8 text-gray-50" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                    </svg>
                </div>
            </a>
        </div>
        <div class="">
            <a class="venobox block relative group" data-gall="myGallery"  href="{{asset('doc/Caltur.jpg')}}">
                <img src="{{asset('images/logos/caltur.png')}}" alt="" class="object-contain">
                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="bg-primary bg-opacity-70 p-1 rounded-md h-8 w-8 text-gray-50" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                    </svg>
                </div>
            </a>
        </div>
        <div class="">
            <a class="venobox block relative group" data-gall="myGallery"  href="{{asset('doc/esnna.jpg')}}">
                <img src="{{asset('images/logos/esnna.png')}}" alt="" class="object-contain">
                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="bg-primary bg-opacity-70 p-1 rounded-md h-8 w-8 text-gray-50" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                    </svg>
                </div>
            </a>
        </div>
        <div class="">
            <a class="venobox block relative group" data-gall="myGallery"  href="{{asset('doc/Dircetur.jpg')}}">
                <img src="{{asset('images/logos/gercetur.png')}}" alt="" class="object-contain">
                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="bg-primary bg-opacity-70 p-1 rounded-md h-8 w-8 text-gray-50" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                    </svg>
                </div>
            </a>
        </div>
        <div class="">
            <a class="venobox block relative group" data-gall="myGallery"  href="{{asset('doc/safe-travel.jpg')}}">
                <img src="{{asset('images/logos/safe-travel.png')}}" alt="" class="object-contain">
                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="bg-primary bg-opacity-70 p-1 rounded-md h-8 w-8 text-gray-50" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                    </svg>
                </div>
            </a>
        </div>
        <div class="">
            <img src="{{asset('images/logos/iglta.png')}}" alt="" class="object-contain">
        </div>
        <div class="">
            <img src="{{asset('images/logos/prom-peru.png')}}" alt="" class="object-contain">
        </div>
        <div class="">
            <img src="{{asset('images/logos/logo-registrado.png')}}" alt="" class="object-contain">
        </div>

    </section>

    <section class="grid lg:grid-cols-4 md:grid-cols-2 gap-6 md:px-24 px-10 my-12 relative">
        <div class="text-center shadow-lg rounded-lg md:px-12 px-5 py-8 bg-white">
            <svg  xmlns="http://www.w3.org/2000/svg" class="h-20 w-16 mx-auto text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
            <h3 class="font-semibold text-primary text-lg  mt-3 mb-4">Private Service</h3>
            <p class="text-gray-500 mb-9 block">Enjoy a unique private service, tailored just for you.</p>
{{--            <div class="transform hover:-translate-y-3 transition duration-500 ease-in-out">--}}
{{--                <a href="" class="transform hover:-translate-y-3 transition duration-500 ease-in-out rounded-full py-4 px-9 bg-secondary text-white text-xs font-semibold">VER MÁS</a>--}}
{{--            </div>--}}
        </div>
        <div class="text-center shadow-lg rounded-lg md:px-12 px-5 py-8 bg-white">
            <svg  xmlns="http://www.w3.org/2000/svg" class="h-20 w-16 mx-auto text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
            <h3 class="font-semibold text-primary text-lg  mt-3 mb-4">24/7 Support</h3>
            <p class="text-gray-500 mb-9 block">We are here for you 24 hours a day, every day of the year.</p>
{{--            <div class="transform hover:-translate-y-3 transition duration-500 ease-in-out">--}}
{{--                <a href="" class="transform hover:-translate-y-3 transition duration-500 ease-in-out rounded-full py-4 px-9 bg-secondary text-white text-xs font-semibold">VER MÁS</a>--}}
{{--            </div>--}}
        </div>
        <div class="text-center shadow-lg rounded-lg md:px-12 px-5 py-8 bg-white">
            <svg  xmlns="http://www.w3.org/2000/svg" class="h-20 w-16 mx-auto text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <h3 class="font-semibold text-primary text-lg  mt-3 mb-4">Best Prices</h3>
            <p class="text-gray-500 mb-9 block">Travel with the best rates, guaranteed.</p>
{{--            <div class="transform hover:-translate-y-3 transition duration-500 ease-in-out">--}}
{{--                <a href="" class="transform hover:-translate-y-3 transition duration-500 ease-in-out rounded-full py-4 px-9 bg-secondary text-white text-xs font-semibold">VER MÁS</a>--}}
{{--            </div>--}}
        </div>
        <div class="text-center shadow-lg rounded-lg md:px-12 px-5 py-8 bg-primary">
            <h3 class="font-semibold text-gray-50 text-lg  mt-3 mb-4">Book Now</h3>
            <p class="text-gray-500 mb-9 block text-gray-200">Your next adventure is just one click away.</p>
            <p class="text-white text-xs tracking-tight mb-12">Call Now</p>
            <div class="transform hover:-translate-y-3 transition duration-500 ease-in-out">
                <a href="https://api.whatsapp.com/send?phone=51984645720" target="_blank" class="transform hover:-translate-y-3 transition duration-500 ease-in-out rounded-full py-4 px-6 bg-secondary text-white text-xs font-semibold">+51 984 645 720</a>
            </div>
        </div>
    </section>

{{--    <section class="grid lg:grid-cols-4 md:grid-cols-2 gap-6 md:px-24 px-10 relative z-50">--}}
{{--        <div class="text-center shadow-lg rounded-lg md:px-12 px-5 py-8 bg-white -mt-24">--}}
{{--            <svg  xmlns="http://www.w3.org/2000/svg" class="h-20 w-16 mx-auto text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />--}}
{{--            </svg>--}}
{{--            <h3 class="font-semibold text-primary text-lg  mt-3 mb-4">Private service</h3>--}}
{{--            <p class="text-gray-500 mb-9 block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid expedita illo molestias reiciendis.</p>--}}
{{--            <div class="transform hover:-translate-y-3 transition duration-500 ease-in-out">--}}
{{--                <a href="" class="transform hover:-translate-y-3 transition duration-500 ease-in-out rounded-full py-4 px-9 bg-secondary text-white text-xs font-semibold">VER MÁS</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="text-center shadow-lg rounded-lg md:px-12 px-5 py-8 bg-white md:-mt-24">--}}
{{--            <svg  xmlns="http://www.w3.org/2000/svg" class="h-20 w-16 mx-auto text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />--}}
{{--            </svg>--}}
{{--            <h3 class="font-semibold text-primary text-lg  mt-3 mb-4">24/7 support</h3>--}}
{{--            <p class="text-gray-500 mb-9 block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid expedita illo molestias reiciendis.</p>--}}
{{--            <div class="transform hover:-translate-y-3 transition duration-500 ease-in-out">--}}
{{--                <a href="" class="transform hover:-translate-y-3 transition duration-500 ease-in-out rounded-full py-4 px-9 bg-secondary text-white text-xs font-semibold">VER MÁS</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="text-center shadow-lg rounded-lg md:px-12 px-5 py-8 bg-white lg:-mt-24">--}}
{{--            <svg  xmlns="http://www.w3.org/2000/svg" class="h-20 w-16 mx-auto text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />--}}
{{--            </svg>--}}
{{--            <h3 class="font-semibold text-primary text-lg  mt-3 mb-4">Best prices</h3>--}}
{{--            <p class="text-gray-500 mb-9 block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid expedita illo molestias reiciendis.</p>--}}
{{--            <div class="transform hover:-translate-y-3 transition duration-500 ease-in-out">--}}
{{--                <a href="" class="transform hover:-translate-y-3 transition duration-500 ease-in-out rounded-full py-4 px-9 bg-secondary text-white text-xs font-semibold">VER MÁS</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="text-center shadow-lg rounded-lg md:px-12 px-5 py-8 bg-primary lg:-mt-24">--}}
{{--            <h3 class="font-semibold text-gray-50 text-lg  mt-3 mb-4">Reserve now</h3>--}}
{{--            <p class="text-gray-500 mb-9 block text-gray-200">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid expedita illo molestias reiciendis.</p>--}}
{{--            <p class="text-white text-xs tracking-tight mb-12">CALL NOW</p>--}}
{{--            <div class="transform hover:-translate-y-3 transition duration-500 ease-in-out">--}}
{{--                <a href="https://api.whatsapp.com/send?phone=51984645720" target="_blank" class="transform hover:-translate-y-3 transition duration-500 ease-in-out rounded-full py-4 px-6 bg-secondary text-white text-xs font-semibold">+51 984 645 720</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

    <section class="md:px-24 px-10 my-24 lg:justify-between lg:flex">
        <div class="relative">
            <h2 class="md:text-5xl text-3xl font-semibold z-30 text-primary relative">Travel packages</h2>
            <h4 class="md:text-8xl text-5xl font-bold inset-0 text-gray-100 text-opacity-90 absolute z-10 -top-10">TOURS</h4>
        </div>
        <div class="block pt-6 text-right">
            <div class="transform hover:-translate-y-3 transition duration-500 ease-in-out">
                <a href="/en-tours" class="transform hover:-translate-y-3 transition duration-500 ease-in-out rounded-full py-4 px-9 bg-secondary text-white font-semibold">DISCOVER MORE</a>
            </div>
        </div>
    </section>

    <section class="md:px-24 mb-24 px-10 grid grid-cols-1 lg:grid-cols-3 gap-6">
        @foreach ($paquetes as $paquete)
            <div class="group shadow-lg rounded-xl overflow-hidden">
                <div class="overflow-hidden relative">
                    <img src="{{asset($paquete->imagen)}}"  class="rounded-t-xl object-cover transition duration-500 ease-in-out transform group-hover:-translate-x-0 group-hover:scale-105"/>
                </div>
                <div class="p-9 block">
                    <h2 class="text-xl font-bold">{{$paquete->titulo}}
{{--                        <span class="text-secondary">--}}
{{--                            <span class="text-xs align-top">Desde</span>--}}
{{--                            {{$paquete->precio_paquetes->where('estrellas', 2)->first()->precio_s}}--}}
{{--                            <span class="text-xs">usd</span>--}}
{{--                        </span>--}}
                    </h2>
                    <div class="text-sm mb-7 text-gray-500 mt-3">{!!Str::limit($paquete->descripcion, 100,$end='...')!!}</div>

                    <div class="transform hover:-translate-y-3 transition duration-500 ease-in-out">
                        <a href="/en-tours/{{$paquete->url}}" class="transform hover:-translate-y-3 transition duration-500 ease-in-out rounded-full py-4 px-9 bg-secondary text-xs text-white font-semibold">SEE DETAILS</a>
                    </div>
                </div>
            </div>
        @endforeach
    </section>


    <section class="flex flex-col lg:flex-row mb-24 items-center">
        <div class="lg:px-24 lg:py-32 p-16 bg-primary text-gray-50 shadow-xl lg:w-3/4 xl:w-3/4 2xl:w-1/2">
            <div class="relative">
                <h4 class="lg:text-4xl md:text-5xl text-3xl text-white font-medium relative z-30 text-secondary">Take a break and see</h4>
                <h3 class="md:pl-10 md:text-5xl text-3xl my-3 font-bold text-gray-50 relative z-30">Our latest news</h3>
                <h4 class="lg:text-7xl md:text-8xl text-5xl font-bold inset-0 text-gray-100 text-opacity-20 absolute z-10 -top-5">EPUERTO</h4>
            </div>
            <div class="transform hover:-translate-y-3 transition duration-500 ease-in-out mt-5">
                <a href="/noticias" class="transform hover:-translate-y-3 transition duration-500 ease-in-out rounded-full py-4 px-9 bg-secondary text-xs text-white font-semibold uppercase">See news</a>
            </div>
            <div class="grid lg:grid-cols-3 grid-cols-1 gap-5 mt-10 mr-12 text-center cursor-pointer">
                <div class="bg-white rounded-lg shadow transform hover:scale-105 transition duration-500">
                    <a href="/hoteles#hotel" class="flex flex-col justify-center items-center gap-4  p-5">
                        <img src="{{asset('/images/iconos/hotel.png')}}" class="h-16 w-16 hover:opacity-60">
                        <span class="text-secondary text-sm font-semibold hover:text-primary">See hotels</span>
                    </a>
                </div>
                <div class="bg-white rounded-lg shadow transform hover:scale-105 transition duration-500">
                    <a href="/f-a-q#restaurantes" class="flex flex-col justify-center items-center gap-4  p-5">
                        <img src="{{asset('/images/iconos/res.png')}}" class="h-16 w-16  hover:opacity-60">
                        <span class="text-secondary text-sm font-semibold hover:text-primary">see restaurants</span>
                    </a>
                </div>
                <div class="bg-white rounded-lg shadow transform hover:scale-105 transition duration-500">
                    <a href="/f-a-q#consejos" class="flex flex-col justify-center items-center gap-4  p-5">
                        <img src="{{asset('/images/iconos/tourist.png')}}" class="h-16 w-16  hover:opacity-60">
                        <span class="text-secondary text-sm font-semibold hover:text-primary">See travel tips</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="-ml-24 lg:-mt-auto">
            <img src="{{asset('images/hotels/2star.jpg')}}" alt="" class="object-cover">
        </div>
    </section>

    <section class="md:px-24 px-10 my-24 lg:justify-between lg:flex">
        <div class="relative">
            <h2 class="md:text-5xl text-3xl font-semibold z-30 text-primary relative">Popular Destinations</h2>
            <h4 class="md:text-8xl text-5xl font-bold inset-0 text-gray-100 text-opacity-90 absolute z-10 -top-10">EPUERTO</h4>
        </div>
        <div class="block pt-6 text-right">
            <div class="transform hover:-translate-y-3 transition duration-500 ease-in-out">
                <a href="/informacion-de-viaje" class="transform hover:-translate-y-3 transition duration-500 ease-in-out rounded-full py-4 px-9 bg-secondary text-white font-semibold">DISCOVER MORE</a>
            </div>
        </div>
    </section>

    <section class="md:px-24 px-10 grid grid-cols-1 lg:grid-cols-3 gap-6 mb-10">
        @foreach ($destinos as $destino)
            <div class="group shadow-lg rounded-xl overflow-hidden">
                <div class="overflow-hidden relative">
                    <img src="{{asset($destino->imagen)}}" class="rounded-t-xl object-cover transition duration-500 ease-in-out transform group-hover:-translate-x-0 group-hover:scale-105"/>
                </div>
                <div class="md:p-9 p-5 block">
                    <h2 class="text-xl font-bold text-primary">{{$destino->nombre}}</h2>
                    <div class="text-sm mb-7 text-gray-500 mt-3">{!!Str::limit($destino->resumen, 100,$end='...')!!}</div>

                    <div class="transform hover:-translate-y-3 transition duration-500 ease-in-out">
                        <a href="/informacion-de-viaje#{{$destino->nombre}}" class="transform hover:-translate-y-3 transition duration-500 ease-in-out rounded-full py-4 px-9 bg-secondary text-xs text-white font-semibold">SEE DETAILS</a>
                    </div>
                </div>
            </div>
        @endforeach
    </section>


@endsection
@push('scripts')
    <script src="https://code.jquery.com/jquery-latest.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.venobox').venobox({
                framewidth : '800px',
            });
        });

    </script>
@endpush
