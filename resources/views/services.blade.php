@extends('layouts.mainlayout')

@section('title', 'Services')

@section('content')
<!-- Content Start -->
<section id="services" class="py-24 bg-zinc-200">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="max-w-xl mx-auto text-center mb-16">
                <h3 class="font-bold uppercase text-sky-600 text-center mb-2 text-xl lg:text-2xl">Community Services
                </h3>
                <h2 class="font-semibold text-zinc-800 text-center mb-1 lg:text-4xl">HELLO!</h2>
                <h2 class="font-semibold text-zinc-800 text-center mb-4 lg:text-2xl">Desak Saraswati</h2>
            </div>
        </div>
    </div>
    <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
        <div class="mb-12 p-4 md:w-1/2">
            <div class="rounded-md shadow-md overflow-hidden">
                <a href="Activities.html""><img src=" ../dist/img/services.jpg" alt="Services-img" width="w-full"></a>
            </div>
            <h3 class="font-semibold text-xl text-center text-zinc-800 mt-5 mb-3">Community Service</h3>
            <p class="text-sm text-center text-zinc-500">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Eos omnis veritatis corporis nemo nihil ipsum? </p>
        </div>
        <div class="mb-12 p-4 md:w-1/2">
            <div class="rounded-md shadow-md overflow-hidden">
                <a href="Activities.html"><img src="../dist/img/complaints.jpg" alt="Complaints-img" width="w-full"></a>
            </div>
            <h3 class="font-semibold text-xl text-center text-zinc-800 mt-5 mb-3">Need Your Feedback</h3>
            <p class="text-sm text-center text-zinc-500">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Eos omnis veritatis corporis nemo nihil ipsum? </p>
        </div>
</section>
<!-- Content End -->

@endsection
