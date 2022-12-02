@extends('layouts.mainlayout')

@section('title', 'Activities')

@section('content')
<!-- Activities Start -->
<section id="act" class="pt-24">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="max-w-xl mx-auto text-center mb-16">
                <h2 class="font-semibold text-sky-600 text-center mb-4 lg:text-4xl">Activities in Banjar Village
                </h2>
                <p class="text-center text-sm text-zinc-500">Banjar villagers are active in various activities. 
                    There are various types of activities, such as gotong royong, village meetings, and others.</p>
            </div>
        </div>
    </div>
    <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
        @foreach ($act as $key => $item)
        <div class="mb-12 p-4 md:w-1/4">
            <div class="rounded-md shadow-md overflow-hidden">
                <img src="  img/Activities.jpg" alt="Gotong Royong" width="w-full">
            </div>
            <h3 class="font-semibold text-xl text-zinc-800 mt-5 mb-3">{{$item->act_name}}</h3>
            <p class="text-sm text-zinc-500 text-justify">{{$item->act_desc}}</p>
        </div>
        @endforeach

    </div>
</section>
<!-- Activities End -->
@endsection
