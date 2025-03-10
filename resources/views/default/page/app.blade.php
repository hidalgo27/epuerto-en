<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('title')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins.css') }}" rel="stylesheet">
{{--    <link rel="stylesheet" href="https://unpkg.com/element-plus/lib/theme-chalk/index.css">--}}
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('favicon/site.webmanifest')}}">
    <link rel="mask-icon" href="{{asset('favicon/safari-pinned-tab.svg')}}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <style>
        .banner-wrapper {
            z-index: 99;
            transition: all 300ms ease-in-out;
            width: 100%;
        }
        .banner {
            width: 100%;

            text-transform: uppercase;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            /*background: rgba(162, 197, 35, 1);*/
            transition: all 300ms ease-in-out;
        }
        .animateIn{
            transform: translateY(0px);
        }

        .animateOut{
            transform: translateY(-100%);
        }
    </style>
</head>
<body>
<div id="app">
{{--    <div class="fixed z-40 p-8">--}}
{{--        <button onclick="openModal(true)" class="rounded text-gray-50 focus:outline-none">--}}
{{--            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16" />--}}
{{--            </svg>--}}
{{--        </button>--}}
{{--    </div>--}}

    <div class="fixed bottom-0 right-0 z-40 p-2">
        <a href="https://api.whatsapp.com/send?phone=51984645720" target="_blank">
            <img src="{{asset('images/whatsapp-i.png')}}" alt="" class="w-20 animate-bounce">
        </a>
    </div>

{{--    <div class="text-white px-6 py-1 flex items-center justify-between border-0 relative w-full bg-secondary bg-opacity-90">--}}
{{--        <div class="">--}}
{{--            <span class="text-xl inline-block mr-5 align-middle">--}}
{{--                <i class="fas fa-bell"></i>--}}
{{--              </span>--}}
{{--            <span class="inline-block align-middle mr-8">--}}
{{--                <a href="{{asset('doc/covid-19.pdf')}}" target="_blank"><b class="capitalize">COVID-19</b> Update</a>--}}
{{--              </span>--}}
{{--        </div>--}}
{{--        <button class="bg-transparent text-2xl font-semibold leading-none mr-6 outline-none focus:outline-none" onclick="closeAlert(event)">--}}
{{--            <span>×</span>--}}
{{--        </button>--}}
{{--    </div>--}}

    <header class="relative flex flex-col justify-between h-screen overflow-hidden">
        <div class="flex flex-col">
            <div class="relative items-start shadow grid grid-cols-3 justify-between z-30">
                <div class="p-8 flex inline-flex text-gray-50 items-center invisible sm:visible">
                    <a href="https://epuertotravelperu.com"><img src="{{asset('images/iconos/espana.png')}}" alt="" class="w-9 ml-3"></a>
                    <span class="mx-2">|</span>
                    <i data-feather="phone" class="" stroke-width="1"></i> +51 984 645720
                </div>
                <div class="p-3">
                    <a href="/"><img src="<?php echo e(asset('images/epuerto-logo.png')); ?>" alt="" class="w-32 mx-auto"></a>
                </div>
                <div class="flex justify-end p-8 invisible sm:visible">
                    <a href="https://www.facebook.com/EpuertoTravelPeru" target="_blank" class="mx-2">
                        <i data-feather="facebook" class="text-gray-50" stroke-width="1"></i>
                    </a>
                    <a href="https://www.youtube.com/user/EpuertoPeruTravelPer" target="_blank" class="mx-2">
                        <i data-feather="youtube" class="text-gray-50" stroke-width="1"></i>
                    </a>
                    <a href="https://www.tripadvisor.com.pe/Attraction_Review-g294314-d3836582-Reviews-Epuerto_Peru_Travel_Tours-Cusco_Cusco_Region.html" target="_blank" class="mx-2">
                        <img src="{{asset('images/iconos/ico_tripadvisor.png')}}" alt="" class="w-6">
                    </a>
                </div>
            </div>

            <div class="flex z-30 px-24 items-center justify-center">
            {{--                            <div>--}}
            {{--                                <a class="text-2xl font-bold text-gray-800 dark:text-white lg:text-3xl hover:text-gray-700 dark:hover:text-gray-300" href="/">--}}
            {{--                                    <img src="{{asset('images/logo-epuerto.png')}}" alt="" class="w-60">--}}
            {{--                                </a>--}}
            {{--                            </div>--}}

            <!-- Mobile menu button -->
                <div class="flex md:hidden">
                    <button id="clos"type="button" class="text-gray-50 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400" aria-label="toggle menu">
                        <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                            <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="items-center bg-primary bg-opacity-80 py-4 px-24 justify-center md:flex toggle hidden z-30">
                <div class="flex flex-col md:flex-row lg:mx-6 md::gap-0 gap-2">
                    <a class="text-gray-50 my-1 text-sm font-medium dark:text-gray-200 hover:text-secondary dark:hover:text-indigo-400 md:mx-4 md:my-0 transform hover:-translate-x-2 transition duration-500 ease-in-out"  href="/nosotros">About</a>
                    <a class="text-gray-50 my-1 text-sm font-medium dark:text-gray-200 hover:text-secondary dark:hover:text-indigo-400 md:mx-4 md:my-0 transform hover:-translate-x-2 transition duration-500 ease-in-out" href="/en-tours">Best Cusco Tours</a>
                    <a class="text-gray-50 my-1 text-sm font-medium dark:text-gray-200 hover:text-secondary dark:hover:text-indigo-400 md:mx-4 md:my-0 transform hover:-translate-x-2 transition duration-500 ease-in-out" href="/informacion-de-viaje">Information</a>
                    <a class="text-gray-50 my-1 text-sm font-medium dark:text-gray-200 hover:text-secondary dark:hover:text-indigo-400 md:mx-4 md:my-0 transform hover:-translate-x-2 transition duration-500 ease-in-out" href="/hoteles">Hotels</a>
                    <a class="text-gray-50 my-1 text-sm font-medium dark:text-gray-200 hover:text-secondary dark:hover:text-indigo-400 md:mx-4 md:my-0 transform hover:-translate-x-2 transition duration-500 ease-in-out" href="/f-a-q">FAQs</a>
                    <a class="text-gray-50 my-1 text-sm font-medium dark:text-gray-200 hover:text-secondary dark:hover:text-indigo-400 md:mx-4 md:my-0 transform hover:-translate-x-2 transition duration-500 ease-in-out" href="/contacto">Contact</a>
                </div>

            </div>
        </div>
        <div class="relative grid grid-cols-1 gap-6 place-items-center text-center text-white z-30">

            <div>
                @yield('title_header')
            </div>

        </div>
        <div class="relative z-30 p-5 flex justify-center">
            <img src="{{asset('images/logos/marca-peru.png')}}" alt="" width="150" class="opacity-50">
        </div>
        <video autoplay loop muted class="absolute z-10 w-auto min-w-full min-h-full max-w-none">
            <source src="https://assets.mixkit.co/videos/preview/mixkit-set-of-plateaus-seen-from-the-heights-in-a-sunset-26070-large.mp4" type="video/mp4" />Your browser does not support the video tag.
            {{--            <source src="{{asset('media/intro.mp4')}}" type="video/mp4" />Your browser does not support the video tag.--}}
        </video>
        {{--        <div class="vimeo-wrapper absolute z-10 w-auto min-w-full min-h-full max-w-none">--}}
        {{--            <iframe src="https://player.vimeo.com/video/361847703?background=1&autoplay=1&loop=1&title=0&byline=0&portrait=0&muted=1"--}}
        {{--                    frameborder="0"  class="absolute z-10 w-auto min-w-full min-h-full max-w-none"></iframe>--}}
        {{--        </div>--}}
        <div class="absolute z-10 w-auto min-w-full min-h-full max-w-none">

        </div>
        <div class="bg-footer-texture bg-repeat-x absolute h-6 bg-12 bottom-0 w-full z-30"></div>
{{--        <img src="{{asset('images/logos/marca-peru.png')}}" alt="" width="150" class="mx-auto absolute bottom-0 z-50">--}}
    </header>




    @yield('content')
    <section class=" grid grid-cols-2 sm:grid-cols-8 px-24 gap-12 sm:gap-16 bg-gray-100 py-6">
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
            <a class="venobox block relative group" data-gall="myGallery"  href="{{asset('doc/caltur.jpg')}}">
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

    <section id="contacto">
        <div class="flex justify-center items-center sm:justify-end lg:bg-left bg-right bg-green-500 relative">
            <img src="{{asset('images/mampi-2.jpg')}}" alt="" class="object-cover w-full" style="height: 500px">
            @if (session('status'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Thank you for contacting us</strong><br>
                    <span class="block sm:inline">Your message was sent successfully.</span>
                </div>
            @endif
            <div class="absolute flex flex-col inset-0 flex items-end justify-center">
                <div class="lg:w-2/5 md:w-3/5 md:p-10 bg-gray-50 p-6  sm:mr-24 flex flex-col rounded ">
                    <h2 class="text-3xl mb-6 font-black text-primary">Contact Form</h2>
                    <form method="POST" action="{{route('contact_form')}}">
                        @csrf
                        <div class="mb-4">
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 placeholder-primary placeholder-opacity-70 leading-tight focus:outline-none focus:shadow-outline" name="tNombre" type="text" placeholder="Name" required>
                        </div>
                        <div class="mb-4">
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 placeholder-primary placeholder-opacity-70 leading-tight focus:outline-none focus:shadow-outline" name="tEmail" type="text" placeholder="Email" required>
                        </div>
                        <div class="mb-4">
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 placeholder-primary placeholder-opacity-70 leading-tight focus:outline-none focus:shadow-outline" name="tCelular" type="text" placeholder="Cell phone number">
                        </div>
                        <div class="mb-4">
                            <textarea class="shadow form-textarea mt-1 block w-full border rounded w-full py-2 px-3 placeholder-primary placeholder-opacity-70 leading-tight focus:outline-none focus:shadow-outline" name="tMensaje" placeholder="Message" required></textarea>
                        </div>
                        <div class="flex items-center justify-center">
                            <button class="bg-secondary hover:bg-opacity-70 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                                Send
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="relative bg-primary pt-6">
        <div class="bg-footer-texture bg-repeat-x bg-12 top-0 w-full z-30 p-12">
            <div class="grid md:grid-cols-3 grid-cols-1 gap-8">
                <div class="text-white">
                    <div class="font-semibold uppercase text-sm">
                        <span>Epuerto</span><span class="text-secondary"> Perú</span>
                    </div>
                    <p class="p-5 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas molestiae provident illo, eveniet qui deleniti.<p>
                    <span class="font-semibold text-sm">Visit our social networks</span>
                </div>
                <div class="text-white">
                    <span class="font-semibold uppercase text-sm">CONTACT US</span>
                    <div class="flex items-center my-3 gap-x-3 text-sm">
                        <i data-feather="phone" class="ml-6 text-secondary"></i>
                        <div class="grid grid-rows-2">
{{--                            <span>+51 84 228824</span>--}}
                            <span>+51 984 645720</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-x-3 text-sm">
                        <i data-feather="mail" class="ml-6 my-auto text-secondary"></i>
                        <div class="grid grid-rows-2">
                            <span>percy@epuerto.com</span>
                            <span>sales2@epuerto.com</span>
                        </div>
                    </div>
                    <div class="flex items-center my-3 gap-x-3 text-sm">
                        <i data-feather="map-pin" class="ml-6 text-secondary"></i>
                        <span>Jr. Cusco L-10 Dpto. 602 Wanchaq – Cusco – Peru</span>
                    </div>
                </div>
                <div class="flex flex-col gap-2 text-white">
                    <span class="font-semibold uppercase text-sm">Visit our social networks</span>
                    <div class="flex flex-row pt-5 px-3 gap-3">
                        <a href="https://www.facebook.com/EpuertoTravelPeru" target="_blank"><img src="{{asset('images/iconos/face2.png')}}" class="h-20 w-20 transform hover:scale-125 transition duration-500 "></a>
                        <a href="https://www.youtube.com/user/EpuertoPeruTravelPer" target="_blank"><img src="{{asset('images/iconos/you2.png')}}" class="h-20 w-20 transform hover:scale-125 transition duration-500"></a>
                        <div class=" bg-green-500 rounded-full h-20 w-20 flex items-center justify-center transform hover:scale-125 transition duration-500">
                            <a href="https://www.tripadvisor.com.pe/Attraction_Review-g294314-d3836582-Reviews-Epuerto_Peru_Travel_Tours-Cusco_Cusco_Region.html" target="_blank"><img src="{{asset('images/iconos/ico_tripadvisor.png')}}" class="h-8 w-8 "></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="mx-16">
        <div class="container mx-auto text-center text-xs text-gray-50 py-3">
            Copyright Nebula 2021 All Rights Reserved | <a href="{{asset('doc/Terms&Conditions2021.pdf')}}" target="_blank" class="font-medium">Terms an Conditions</a>
        </div>
    </footer>
</div>
<script src="{{asset('js/app.js')}}"></script>
@stack('scripts')
<script src="{{asset('js/plugins.js')}}"></script>
<script>
    (() => {
        'use strict';

        let refOffset = 0;
        const bannerHeight = 77;
        const bannerWrapper = document.querySelector('.banner-wrapper');
        const banner = document.querySelector('.banner');

        const handler = () => {
            const newOffset = window.scrollY || window.pageYOffset;

            if (newOffset > bannerHeight) {
                if (newOffset > refOffset) {
                    bannerWrapper.classList.remove('animateIn');
                    bannerWrapper.classList.add('animateOut');
                } else {
                    bannerWrapper.classList.remove('animateOut');
                    bannerWrapper.classList.add('animateIn');
                }
                // banner.style.background = 'rgba(162, 197, 35, 0.6)';
                refOffset = newOffset;
            } else {
                // banner.style.backgroundColor = 'rgba(162, 197, 35, 1)';
            }
        };

        window.addEventListener('scroll', handler, false);
    })();
    var myRadios = document.getElementsByName('tabs2');
        var setCheck;
        var x = 0;
        for(x = 0; x < myRadios.length; x++){
            myRadios[x].onclick = function(){
                if(setCheck != this){
                     setCheck = this;
                }else{
                    this.checked = false;
                    setCheck = null;
            }
            };
        }
        document.getElementById("clos").onclick = function toggleMenu() {
  const navToggle = document.getElementsByClassName("toggle");
  for (let i = 0; i < navToggle.length; i++) {
    navToggle.item(i).classList.toggle("hidden");
  }
};
    function closeAlert(event){
        let element = event.target;
        while(element.nodeName !== "BUTTON"){
            element = element.parentNode;
        }
        element.parentNode.parentNode.removeChild(element.parentNode);
    }
</script>
</body>
</html>
