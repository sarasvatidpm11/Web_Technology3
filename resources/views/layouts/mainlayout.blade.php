<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/dist/output.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
    @vite('resources/css/app.css')
</head>

<body>
    <!-- Header Start -->
    <header class="bg-transparent top-0 left-0 w-full flex items-center z-10">
        <div class="container">
            <div class="flex items-center justify-between relative">
                <div class="px-4">
                    <a href="/" class="font-bold text-2xl text block py-6 text-sky-600 lg:text-3xl">Pojok Desa</a>
                </div>
                <div class="flex items-center px-4">
                    <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                        <span class="hamburger-menu transition duration-300 ease-in-out origin-top-left"></span>
                        <span class="hamburger-menu transition duration-300 ease-in-out"></span>
                        <span class="hamburger-menu transition duration-300 ease-in-out origin-bottom-left"></span>
                    </button>

                    <nav id="nav-menu"
                        class="hidden absolute py-5 rounded-xl bg-white shadow-xl max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                        <ul class="block lg:flex">
                            <li class="group">
                                <a href="/"
                                    class="text-base font-semibold text-zinc-900 py-2 mx-8 flex group-hover:text-sky-600">Home</a>
                            </li>
                            <li class="group">
                                <a href="/profile"
                                    class="text-base font-semibold text-zinc-900 py-2 mx-8 flex group-hover:text-sky-600">Profile</a>
                            </li>
                            <li class="group">
                                <a href="/activities"
                                    class="text-base font-semibold text-zinc-900 py-2 mx-8 flex group-hover:text-sky-600">Activities</a>
                            </li>
                            <li class="group">
                                <a href="/services"
                                    class="text-base font-semibold text-zinc-900 py-2 mx-8 flex group-hover:text-sky-600">Services</a>
                            </li>
                            <li class="group">
                                <a href="#"
                                    class="text-base font-semibold text-zinc-900 py-2 mx-8 flex group-hover:text-sky-600">Complaints
                                </a>
                            </li>
                            <li class="group">
                                <a href="#"
                                    class="text-base font-semibold text-zinc-900 py-2 mx-8 flex group-hover:text-sky-600">Announcement</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    @yield('content')
    @vite('resources/js/app.js')
</body>

</html>
