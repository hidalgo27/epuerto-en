@extends('default.page.app')
@section('title')
    <title>Best Cusco tours best cusco day trips</title>
@endsection
@section('title_header')
    <h1 class="text-4xl mb-6 font-bold font-cinzel text-secondary">Epuerto Perú Travel & Tours</h1>
    <h3 class="md:text-5xl text-3xl font-medium tracking-widest text-gray-50">Tour & Packages</h3>
    <h4 class="md:text-9xl text-5xl font-bold inset-x-0 top-0 -mt-14 text-white text-opacity-10 absolute">Tour & Packages</h4>
@endsection
@section('content')

<div class="lg:mx-20 md:mx-10 mx-5">
   <section class="lg:mb-20 lg:mt-24 md:my-16 my-10 lg:justify-between lg:flex">
      <div class="relative">
            <h2 class="md:text-5xl text-3xl font-semibold z-30 text-primary relative">Tour & Packages</h2>
            <h4 class="md:text-8xl text-5xl font-bold inset-0 text-gray-100 text-opacity-90 absolute z-10 md:-top-10 -top-2">EPUERTO</h4>
      </div>
      <div class="block pt-6 text-right lg:mr-10">
            <div class="transform hover:-translate-y-3 transition duration-500 ease-in-out">
               <a href="/en-tours#contacto" class="transform hover:-translate-y-3 transition duration-500 ease-in-out rounded-full py-4 px-9 bg-secondary text-white font-semibold">CONTACT US</a>
            </div>
      </div>
   </section>
   <section class="md:px-5 px-2">
      @foreach ($paquetes as $paquete)
         <div class="mb-16">
            <a href="/en-tours/{{$paquete->url}}" class="lg:hidden"><h3 class="text-2xl font-semibold text-primary pb-3 hover:text-secondary hover:font-light">{{$paquete->titulo}}</h3></a>
            <div class="grid lg:grid-cols-2 grid-cols-1 gap-8 items-center">
               <div class="relative">
                  <a href="/en-tours/{{$paquete->url}}"><img src="{{asset($paquete->imagen)}}" class="object-cover shadow-lg rounded transform hover:scale-105 transition duration-500"></a>
                  <div class=" absolute p-2 bottom-0 left-0 bg-gray-800 bg-opacity-60 text-secondary border-t border-r border-amber-300">
                     <div class="cursor-pointer transform hover:scale-125 transition duration-500 font-black">{{$paquete->duracion}} days</div>
                  </div>
               </div>
               <div class="pr-5 py-2 border-r border-b border-secondary border-opacity-30 pb-5">
                  <a href="/en-tours/{{$paquete->url}}" class="hidden lg:block"><h3 class="text-2xl font-semibold text-primary pb-3 hover:text-secondary hover:font-light">{{$paquete->titulo}}</h3></a>
                  <div class="text-sm text-justify text-gray-600">{!!$paquete->descripcion!!}</div>
                  <div class="mt-3"><a href="/en-tours/{{$paquete->url}}" class="text-sm bg-secondary bg-opacity-80 rounded p-2 text-white hover:text-primary hover:opacity-70">See details</a></div>
               </div>
            </div>
         </div>
      @endforeach
      <div class="mb-10">
         {{ $paquetes->links() }}
      </div>
   </section>
</div>
@endsection
