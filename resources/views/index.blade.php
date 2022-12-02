@extends('layouts.mainlayout')

@section('title', 'Home')

@section('content')
<!-- Content Start-->
<section id="home" class="pt-20 pb-28">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full justify-center items-center lg:w-1/2 m-auto">
                <h1 class="font-bold text-sky-600 text-3xl lg:text-6xl">WELCOME TO
                    <span class="block"> BANJAR VILLAGE</span>
                </h1>
                <h4 class="text-base font-semibold italic text-zinc-900 lg:text-2xl">The Great Village for Your
                    Choice✔</h4>
            </div>
            <div class="w-full self-end px-10 lg:w-1/2">
                <div class="m-auto">
                    <img src="img/open-Img.jpg" class="max-w-full m-auto" alt="Air Panas Banjar">
                </div>
            </div>
        </div>
</section>
<!-- Content End -->

<!-- Profile Start-->
<section id="about" class="py-36 bg-sky-100">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full px-4 mb-10">
                <h3 class="font-bold uppercase text-sky-600 text-center mb-1 text-xl lg:text-2xl">Profil Desa</h3>
                <h2 class="font-semibold text-zinc-800 text-center mb-4 lg:text-4xl italic">"Do you know?"</h2>
                <p class="text-center text-sm text-zinc-500 lg:text-lg">Banjar Village is a village located in Banjar
                    sub-district, Buleleng district, Bali province, Indonesia.
                    This village is about 17 Km from Singaraja, the capital of Buleleng Regency to the west. Until 2019,
                    the total population of Banjar village was recorded at 12,115 thousand people.
                    This village has several tourist attractions that can be visited, one of which is very famous,
                    namely Banjar Hot Springs</p>
                <div class="flex justify-center items-center">
                    <a href="Profile.html">
                        <button type="button" id="profile"
                            class="group relative border border-transparent bg-sky-600 py-2 px-6 text-sm font-normal text-white hover:bg-sky-700 mt-8 hover:animate-pulse">
                            Read now
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Profile End -->

<!-- Activities Start -->
<section id="act" class="py-36">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="max-w-xl mx-auto text-center mb-16">
                <h3 class="font-bold uppercase text-sky-600 text-center mb-1 text-xl lg:text-2xl">Activities</h3>
                <h2 class="font-semibold text-zinc-800 text-center mb-4 lg:text-4xl">New Activities in Banjar
                    Village</h2>
                <p class="text-center text-sm text-zinc-500">Banjar villagers are active in various activities. 
                    There are various types of activities, such as gotong royong, village meetings, and others.</p>
            </div>
        </div>
    </div>
    <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
        @foreach ($act as $key => $item)
        <div class="mb-12 p-4 md:w-1/3">
            <div class="rounded-md shadow-md overflow-hidden">
                <img src="img/Activities.jpg" alt="Gotong Royong" class="w-full">
            </div>
            <h3 class="font-semibold text-xl text-zinc-800 mt-5 mb-3">{{$item->act_name}}</h3>
            <p class="text-sm text-zinc-500">{{$item->act_desc}}</p>
    </div>
    @endforeach
    </div>
    <div class="flex justify-center items-center">
        <a href="/activities">
            <button type="button" id="activities"
                class="group relative border border-transparent bg-sky-600 py-2 px-6 text-sm font-normal text-white hover:bg-sky-700 hover:animate-bounce">
                All Activities ➡
            </button>
        </a>
    </div>
</section>
<!-- Activities End -->

<!-- Services and Complaints Start -->
<section id="services-complaints" class="py-36  bg-zinc-100">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="max-w-xl mx-auto text-center mb-16">
                <h3 class="font-bold uppercase text-sky-600 text-center mb-1 text-xl lg:text-2xl">Services and
                    Complaints</h3>
                <h2 class="font-semibold text-zinc-800 text-center mb-4 lg:text-4xl">We Can Solve Your Problems</h2>
                <p class="text-center text-sm text-zinc-500">Banjar Village has several services that can help Banjar
                    villagers.
                    Beside that, to improve the quality of the village, the banjar village provides an opportunity for
                    the public to submit complaints about the banjar village.</p>
            </div>
        </div>
    </div>
    <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
        <div class="mb-12 p-4 md:w-1/2">
            <div class="rounded-md shadow-md overflow-hidden">
                <img src=" img/services.jpg" alt="Services-img" class="w-full">
            </div>
            <h3 class="font-semibold text-xl text-center text-zinc-800 mt-5 mb-3">Community Service</h3>
            <p class="text-sm text-center text-zinc-500">Various services for Banjar villagers are available for FREE.
            </p>
        </div>
        <div class="mb-12 p-4 md:w-1/2">
            <div class="rounded-md shadow-md overflow-hidden">
                <img src=" img/complaints.jpg" alt="Complaints-img" class="w-full">
            </div>
            <h3 class="font-semibold text-xl text-center text-zinc-800 mt-5 mb-3">Need Your Feedback</h3>
            <p class="text-sm text-center text-zinc-500">All forms of your complaints about Banjar village can be
                submitted for the betterment of our village.</p>
        </div>
        <div class="flex justify-center items-center">
            <a href="#">
                <button type="button" id="activities"
                    class="group relative border border-transparent bg-zinc-600 py-2 px-6 text-sm font-normal text-white hover:bg-zinc-700 hover:animate-bounce">
                    Try now!
                </button>
            </a>
        </div>
</section>
<!-- Services and Complaints  End -->

<!-- Announcement Start -->
<section id="announcement" class="py-36">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="max-w-xl mx-auto text-center mb-16">
                <h3 class="font-bold uppercase text-sky-600 text-center mb-1 text-xl lg:text-2xl">Announcement</h3>
                <h2 class="font-semibold text-zinc-800 text-center mb-4 lg:text-4xl">Take Your Attention</h2>
                <p class="text-center text-sm text-zinc-500">Some important announcements regarding banjar villages.</p>
            </div>
        </div>
        <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
            <div class="mb-12 p-4 md:w-1/2 lg:w-1/4">
                <div class="rounded-md shadow-md shadow-sky-700 overflow-hidden">
                    <img src=" img/Posyandu.jpg" class="w-full">
                    <h3 class="font-semibold text-lg text-center text-zinc-800 mt-5 mb-3">Activities at Posyandu
                    </h3>
                    <p class="pb-10 m-3 text-justify text-sm text-zinc-500">Posyandu activities are carried out
                        routinely once a month.
                        This activity can be attended by mothers who have babies and toddlers.</p>
                </div>
            </div>
            <div class="mb-12 p-4 md:w-1/2 lg:w-1/4">
                <div class="rounded-md shadow-md shadow-sky-700 overflow-hidden">
                    <img src=" img/Posyandu.jpg" class="w-full">
                    <h3 class="font-semibold text-lg text-center text-zinc-800 mt-5 mb-3">Activities at Posyandu
                    </h3>
                    <p class="pb-10 m-3 text-justify text-sm text-zinc-500">Posyandu activities are carried out
                        routinely once a month. This activity can be attended by mothers who have babies and toddlers.
                    </p>
                </div>
            </div>
            <div class="mb-12 p-4 md:w-1/2 lg:w-1/4">
                <div class="rounded-md shadow-md shadow-sky-700 overflow-hidden">
                    <img src=" img/Posyandu.jpg" class="w-full">
                    <h3 class="font-semibold text-lg text-center text-zinc-800 mt-5 mb-3">Activities at Posyandu
                    </h3>
                    <p class="pb-10 m-3 text-justify text-sm text-zinc-500">Posyandu activities are carried out
                        routinely once a month.
                        This activity can be attended by mothers who have babies and toddlers.</p>
                </div>
            </div>
            <div class="mb-12 p-4 md:w-1/2 lg:w-1/4">
                <div class="rounded-md shadow-md  shadow-sky-700 overflow-hidden">
                    <img src=" img/Posyandu.jpg" class="w-full">
                    <h3 class="font-semibold text-lg text-center text-zinc-800 mt-5 mb-3">Activities at Posyandu
                    </h3>
                    <p class="pb-10 m-3 text-justify text-sm text-zinc-500">Posyandu activities are carried out
                        routinely once a month.
                        This activity can be attended by mothers who have babies and toddlers.</p>
                </div>
            </div>
        </div>
        <div class="flex justify-center items-center">
            <a href="#">
                <button type="button" id="activities"
                    class="group relative border border-sky-700 bg-white py-2 px-6 text-sm font-normal shadow-xl text-sky-700 hover:animate-bounce">
                    See more...
                </button>
            </a>
        </div>
    </div>
</section>
<!-- Announcement End -->
@endsection
