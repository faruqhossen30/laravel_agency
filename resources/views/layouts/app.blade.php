<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'E-Commerce')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 ">

    <header class="bg-[#199724;]">
        <div class="container grid items-center grid-cols-12 p-4 px-6 mx-auto">

            <div class="col-span-4 lg:hidden">
                <button
                    class="px-4 py-2 mb-2 text-sm font-medium bg-white rounded-lg focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button" data-drawer-target="drawer-top-example" data-drawer-show="drawer-top-example"
                    data-drawer-placement="top" aria-controls="drawer-top-example">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd"
                            d="M3 6.75A.75.75 0 0 1 3.75 6h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 6.75ZM3 12a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 12Zm0 5.25a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1-.75-.75Z"
                            clip-rule="evenodd" />
                    </svg>

                </button>
            </div>


            <!-- drawer component -->
            <div id="drawer-top-example"
                class="fixed top-0 left-0 right-0 z-40 w-full p-4 transition-transform -translate-y-full bg-white dark:bg-gray-800"
                tabindex="-1" aria-labelledby="drawer-top-label">
                <h5 id="drawer-top-label"
                    class="inline-flex items-center mb-4 text-base font-semibold text-gray-500 dark:text-gray-400"><svg
                        class="w-4 h-4 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>Menu</h5>
                <button type="button" data-drawer-hide="drawer-top-example" aria-controls="drawer-top-example"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close menu</span>
                </button>
                <ul class="flex flex-col mt-0 space-x-10 text-sm font-medium rtl:space-x-reverse">
                    <li>
                        <a href="#" class="text-gray-900 dark:text-white hover:text-red-600">Windbreaker</a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-900 dark:text-white hover:text-red-600">Men Jeans</a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-900 dark:text-white hover:text-red-600">Women's Gown</a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-900 dark:text-white hover:text-red-600">Shoes</a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-900 dark:text-white hover:text-red-600">Jewelry</a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-900 dark:text-white hover:text-red-600">Sharee</a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-900 dark:text-white hover:text-red-600">Kids Zone</a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-900 dark:text-white hover:text-red-600">Men T-shirt</a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-900 dark:text-white hover:text-red-600">Women's Tunic</a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-900 dark:text-white hover:text-red-600">Grocery</a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-900 dark:text-white hover:text-red-600">Formal Shirt</a>
                    </li>
                </ul>
            </div>



            <div class="order-2 col-span-4 lg:order-1">
                <img src="{{ asset('img/logo-2023-11-28-02-08-58-2270.png') }}" class="w-48 h-auto" alt="">
            </div>
            <form class="flex items-center order-4 col-span-12 bg-white rounded-md lg:order-2 lg:col-span-4" action=""
                method="get">
                <input type="text" class="w-full border-0 rounded-md focus:outline-0 focus:border-0 focus:ring-0"
                    placeholder="Search your products ...">
                <span class="px-2">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd"
                                d="M10.5 3.75a6.75 6.75 0 1 0 0 13.5 6.75 6.75 0 0 0 0-13.5ZM2.25 10.5a8.25 8.25 0 1 1 14.59 5.28l4.69 4.69a.75.75 0 1 1-1.06 1.06l-4.69-4.69A8.25 8.25 0 0 1 2.25 10.5Z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </span>

            </form>
            <div class="order-3 col-span-4">
                <div class="flex items-center justify-end space-x-4">
                    <div class="items-center hidden space-x-2 lg:flex">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-6 h-6 text-red-600">
                            <path fill-rule="evenodd"
                                d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z"
                                clip-rule="evenodd" />
                        </svg>
                        <div class="text-white ">
                            <h4 class="text-sm ">Call Us Now</h4>
                            <p>01615597820</p>
                        </div>
                    </div>
                    <div class="items-center hidden space-x-2 lg:flex">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-6 h-6 text-red-600">
                            <path fill-rule="evenodd"
                                d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z"
                                clip-rule="evenodd" />
                        </svg>
                        <div class="text-white">
                            <h2 class="text-base font-semibold">Account</h2>
                            <p><a href="#" class="text-xs">Login</a> Or <a href="#" class="text-xs">Register</a></p>
                        </div>
                    </div>
                    <a href="#" class="flex space-x-1 text-white">

                        <button type="button"
                            class="relative inline-flex items-center p-3 text-sm font-medium text-center text-white rounded-lg focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-6 h-6">
                                <path
                                    d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" />
                            </svg>

                            <span class="sr-only">Notifications</span>
                            <div
                                class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-white rounded-md -top-2 -end-2 dark:border-gray-900">
                                0</div>
                        </button>

                    </a>
                </div>
            </div>
        </div>
    </header>
    <nav class="container mx-auto ">
        <div class="flex-col hidden py-3 text-lg font-semibold bg-white shadow-lg lg:flex px-14 dark:bg-gray-700">
            <ul class="flex flex-row mt-0 space-x-10 text-sm font-medium rtl:space-x-reverse">
                <li>
                    <a href="#" class="text-gray-900 dark:text-white hover:text-red-600"
                        aria-current="page">Windbreaker</a>
                </li>
                <li>
                    <a href="#" class="text-gray-900 dark:text-white hover:text-red-600">Men Jeans</a>
                </li>
                <li>
                    <a href="#" class="text-gray-900 dark:text-white hover:text-red-600">Women's Gown</a>
                </li>
                <li>
                    <a href="#" class="text-gray-900 dark:text-white hover:text-red-600">Shoes</a>
                </li>
                <li>
                    <a href="#" class="text-gray-900 dark:text-white hover:text-red-600">Jewelry</a>
                </li>
                <li>
                    <a href="#" class="text-gray-900 dark:text-white hover:text-red-600">Sharee</a>
                </li>
                <li>
                    <a href="#" class="text-gray-900 dark:text-white hover:text-red-600">Kids Zone</a>
                </li>
                <li>
                    <a href="#" class="text-gray-900 dark:text-white hover:text-red-600">Men T-shirt</a>
                </li>
                <li>
                    <a href="#" class="text-gray-900 dark:text-white hover:text-red-600">Women's Tunic</a>
                </li>
                <li>
                    <a href="#" class="text-gray-900 dark:text-white hover:text-red-600">Grocery</a>
                </li>
                <li>
                    <a href="#" class="text-gray-900 dark:text-white hover:text-red-600">Formal Shirt</a>
                </li>
            </ul>
        </div>
    </nav>

    <section class="container grid grid-cols-6 gap-8 py-6 mx-auto">
        <div class="col-span-6 lg:col-span-4">
            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('img/slider-.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('img/slider-2.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('img/slider-.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('img/slider-2.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 5 -->
                    {{-- <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('img/slider-.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div> --}}
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2 rtl:space-x-reverse">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                        data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                        data-carousel-slide-to="2"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                        data-carousel-slide-to="3"></button>
                    {{-- <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                        data-carousel-slide-to="4"></button> --}}
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer start-0 group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer end-0 group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
        <div class="hidden lg:block lg:col-span-2">
            <a href="#">
                <img src="{{ asset('img/special-offer.jpg') }}" class="w-full h-56 overflow-hidden md:h-96" alt="">
            </a>
        </div>


    </section>

    <section class="container mx-auto">
        <marquee behavior="" direction="rtl" class="py-1 bg-white rounded-full">পন্যের স্টক ও ডেলিভারি সম্পর্কে জেনে
            নেয়ার অনুরোধ করা যাচ্ছে। প্রযুক্তি পণ্যের মূল্য অস্থিতিশীল হওয়ায় কারণে যেকোন মুহূর্তে যেকোন প্রযুক্তি পণ্যের
            মূল্য পরিবর্তন হতে পারে। </marquee>
    </section>

    <section>
        <h2 class="pt-4 text-3xl font-semibold text-center lg:text-4xl leading-">featured category</h2>
    </section>

    <section class="container mx-auto">
        <div class="p-6 bg-white">

            <div class="grid grid-cols-12 gap-4 p-4 bg-gray-100 ">
                <div class="flex flex-col items-center col-span-4 py-6 bg-white lg:col-span-2">
                    <img src="{{ asset('img/product/men-jeans.jpg') }}" alt="" class="w-16 h-auto">
                    <h4 class="p-1 ">Men Jeans</h4>
                </div>
            </div>
        </div>

    </section>

    <section class="container py-12 mx-auto">
        <div class="px-3 py-0 lg:py-1 bg-gradient-to-r from-green-300 to-lime-600">
            <span class="px-12 text-2xl text-white bg-red-600 rounded-tr-full lg:text-4xl">Men Panjabi</span>
        </div>

        <div class="grid grid-cols-12 gap-2 py-2">
            <div class="col-span-4 space-y-2 lg:col-span-2 group hover:shadow-lg">
                <div class="overflow-hidden bg-white">
                    <a href="#">
                        <img src="{{ asset('img/product/black-fitted-viscose-panjabi.jpg') }}"
                            class="h-[280px] lg:h-[350px] w-[248px] group-hover:scale-125 transition-all duration-1000"
                            alt="">
                    </a>

                </div>
                <div class="bg-white ">
                    <button>
                        <h2 class="px-2 text-lg font-semibold text-left hover:text-yellow-300">Black Semi Fitted
                            Jacquard Cotton Panjab... </h2>
                        <p class="py-2 text-xl font-semibold text-red-600">2795 Tk</p>
                    </button>
                    <div class="p-1 bg-white">
                        <div class="p-2 bg-gray-100 ">
                            <a href="#" class="flex justify-center p-2 space-x-4 text-center text-white bg-red-600">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-6 h-6">
                                    <path
                                        d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" />
                                </svg>

                                <h4 class="">অর্ডার করুন</h4>
                            </a>
                        </div>

                    </div>
                </div>

            </div>

        </div>


        </div>
    </section>

    <section class="container mx-auto">
        <div class="px-3 py-0 lg:py-1 bg-gradient-to-r from-green-300 to-lime-600">
            <span class="px-12 text-2xl text-white bg-red-600 rounded-tr-full lg:text-4xl">Sharee</span>
        </div>

        <div class="grid grid-cols-12 gap-2 py-2">
            <div class="col-span-4 space-y-2 lg:col-span-2 group hover:shadow-lg">
                <div class="overflow-hidden bg-white">
                    <a href="#">
                        <img src="{{ asset('img/product/womens-saree-s7.jpg') }}"
                            class="h-[280px] lg:h-[350px] w-[248px] group-hover:scale-125 transition-all duration-1000"
                            alt="">
                    </a>

                </div>
                <div class="bg-white ">
                    <button>
                        <h2 class="px-2 text-lg font-semibold text-left hover:text-yellow-300">Women's Saree S7</h2>
                        <p class="py-2 text-xl font-semibold text-red-600">2795 Tk</p>
                    </button>
                    <div class="p-1 bg-white">
                        <div class="p-2 bg-gray-100 ">
                            <a href="#" class="flex justify-center p-2 space-x-4 text-center text-white bg-red-600">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-6 h-6">
                                    <path
                                        d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" />
                                </svg>

                                <h4 class="">অর্ডার করুন</h4>
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="container py-12 mx-auto">
        <div class="px-3 py-0 lg:py-1 bg-gradient-to-r from-green-300 to-lime-600">
            <span class="px-12 text-2xl text-white bg-red-600 rounded-tr-full lg:text-4xl">Men T-shirt</span>
        </div>

        <div class="grid grid-cols-12 gap-2 py-2">
            <div class="col-span-4 space-y-2 lg:col-span-2 group hover:shadow-lg">
                <div class="overflow-hidden bg-white">
                    <a href="#">
                        <img src="{{ asset('img/product/gray-cotton-henley-t-shirt-ts.jpg') }}"
                            class="h-[280px] lg:h-[350px] w-[248px] group-hover:scale-125 transition-all duration-1000"
                            alt="">
                    </a>

                </div>
                <div class="bg-white ">
                    <button>
                        <h2 class="px-2 text-lg font-semibold text-left hover:text-yellow-300">Gray Cotton Henley
                            T-Shirt TS-8</h2>
                        <p class="py-2 text-xl font-semibold text-red-600">895 Tk</p>
                    </button>
                    <div class="p-1 bg-white">
                        <div class="p-2 bg-gray-100 ">
                            <a href="#" class="flex justify-center p-2 space-x-4 text-center text-white bg-red-600">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-6 h-6">
                                    <path
                                        d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" />
                                </svg>

                                <h4 class="">অর্ডার করুন</h4>
                            </a>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="container mx-auto">
        <div class="px-3 py-0 lg:py-1 bg-gradient-to-r from-green-300 to-lime-600">
            <span class="px-12 text-2xl text-white bg-red-600 rounded-tr-full lg:text-4xl">Men Jeans</span>
        </div>

        <div class="grid grid-cols-12 gap-2 py-2">
            <div class="col-span-4 space-y-2 lg:col-span-2 group hover:shadow-lg">
                <div class="overflow-hidden bg-white">
                    <a href="#">
                        <img src="{{ asset('img/product/denim-pant-mj.jpg') }}"
                            class="h-[280px] lg:h-[350px] w-[248px] group-hover:scale-125 transition-all duration-1000"
                            alt="">
                    </a>

                </div>
                <div class="bg-white ">
                    <button>
                        <h2 class="px-2 text-lg font-semibold text-left hover:text-yellow-300"> Denim Pant MJ-6</h2>
                        <p class="py-2 text-xl font-semibold text-red-600">2450 tk</p>
                    </button>
                    <div class="p-1 bg-white">
                        <div class="p-2 bg-gray-100 ">
                            <a href="#" class="flex justify-center p-2 space-x-4 text-center text-white bg-red-600">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-6 h-6">
                                    <path
                                        d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" />
                                </svg>

                                <h4 class="">অর্ডার করুন</h4>
                            </a>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </section>

    <section class="container py-12 mx-auto">
        <div class="px-3 py-0 lg:py-1 bg-gradient-to-r from-green-300 to-lime-600">
            <span class="px-12 text-2xl text-white bg-red-600 rounded-tr-full lg:text-4xl">Men T-shirt</span>
        </div>

        <div class="grid grid-cols-12 gap-2 py-2">
            <div class="col-span-4 space-y-2 lg:col-span-2 group hover:shadow-lg">
                <div class="overflow-hidden bg-white">
                    <a href="#">
                        <img src="{{ asset('img/product/gray-cotton-henley-t-shirt-ts.jpg') }}"
                            class="h-[280px] lg:h-[350px] w-[248px] group-hover:scale-125 transition-all duration-1000"
                            alt="">
                    </a>

                </div>
                <div class="bg-white ">
                    <button>
                        <h2 class="px-2 text-lg font-semibold text-left hover:text-yellow-300">Gray Cotton Henley
                            T-Shirt TS-8</h2>
                        <p class="py-2 text-xl font-semibold text-red-600">895 Tk</p>
                    </button>
                    <div class="p-1 bg-white">
                        <div class="p-2 bg-gray-100 ">
                            <a href="#" class="flex justify-center p-2 space-x-4 text-center text-white bg-red-600">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-6 h-6">
                                    <path
                                        d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" />
                                </svg>

                                <h4 class="">অর্ডার করুন</h4>
                            </a>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="container mx-auto">
        <div class="px-3 py-0 lg:py-1 bg-gradient-to-r from-green-300 to-lime-600">
            <span class="px-12 text-2xl text-white bg-red-600 rounded-tr-full lg:text-4xl">Women's Gown</span>
        </div>

        <div class="grid grid-cols-12 gap-2 py-2">
            <div class="col-span-4 space-y-2 lg:col-span-2 group hover:shadow-lg">
                <div class="overflow-hidden bg-white">
                    <a href="#">
                        <img src="{{ asset('img/product/rose-brown-georgette-maxi-with-ruffles.jpg') }}"
                            class="h-[280px] lg:h-[350px] w-[248px] group-hover:scale-125 transition-all duration-1000"
                            alt="">
                    </a>

                </div>
                <div class="bg-white ">
                    <button>
                        <h2 class="px-2 text-lg font-semibold text-left hover:text-yellow-300"> Rose Brown Georgette
                            Maxi With Ruffles</h2>
                        <p class="py-2 text-xl font-semibold text-red-600">1960 tk </p>
                    </button>
                    <div class="p-1 bg-white">
                        <div class="p-2 bg-gray-100 ">
                            <a href="#" class="flex justify-center p-2 space-x-4 text-center text-white bg-red-600">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-6 h-6">
                                    <path
                                        d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" />
                                </svg>

                                <h4 class="">অর্ডার করুন</h4>
                            </a>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </section>

    <section class="container py-12 mx-auto">
        <div class="px-3 py-0 lg:py-1 bg-gradient-to-r from-green-300 to-lime-600">
            <span class="px-12 text-2xl text-white bg-red-600 rounded-tr-full lg:text-4xl">Flash Sell</span>
        </div>

        <div class="grid grid-cols-12 gap-2 py-2">
            <div class="col-span-4 space-y-2 lg:col-span-2 group hover:shadow-lg">
                <div class="overflow-hidden bg-white">
                    <a href="#">
                        <img src="{{ asset('img/product/black-fitted-viscose-panjabi.jpg') }}"
                            class="h-[280px] lg:h-[350px] w-[248px] group-hover:scale-125 transition-all duration-1000"
                            alt="">
                    </a>

                </div>
                <div class="bg-white ">
                    <button>
                        <h2 class="px-2 text-lg font-semibold text-left hover:text-yellow-300">Black Fitted Viscose
                            Panjabi MP-3</h2>
                        <p class="py-2 text-xl font-semibold text-red-600">1560 tk</p>
                    </button>
                    <div class="p-1 bg-white">
                        <div class="p-2 bg-gray-100 ">
                            <a href="#" class="flex justify-center p-2 space-x-4 text-center text-white bg-red-600">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-6 h-6">
                                    <path
                                        d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" />
                                </svg>

                                <h4 class="">অর্ডার করুন</h4>
                            </a>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="container px-2 py-12 mx-auto lg:px-36">
        <div class="py-2 border-b-2 border-black ">
            <span class="px-12 py-2 text-3xl font-semibold text-white bg-green-500 rounded-tr-full">Top Brands</span>
        </div>
        <div class="flex items-center p-4 bg-white shadow-xl justify-evenly">
            <a href="#">
                <img src="{{ asset('img/icon/yellow.png') }}" class="w-20 h-20 " alt="">
            </a>
            <a href="#">
                <img src="{{ asset('img/icon/easy.jpg') }}" class="w-20 h-20 " alt="">
            </a>
            <a href="#">
                <img src="{{ asset('img/icon/lereve-3.jpg') }}" class="w-20 h-20 " alt="">
            </a>
            <a href="#">
                <img src="{{ asset('img/icon/twelve.png') }}" class="w-20 h-20 " alt="">
            </a>
            <a href="#">
                <img src="{{ asset('img/icon/aarong.webp') }}" class="w-20 h-20 " alt="">
            </a>
            <a href="#">
                <img src="{{ asset('img/icon/another.jpg') }}" class="w-20 h-20 " alt="">
            </a>
            <a href="#">
                <img src="{{ asset('img/icon/nirjon.jpg') }}" class="w-20 h-20 " alt="">
            </a>
        </div>
    </section>

    <section class="container px-12 py-12 mx-auto lg:px-28">
        <div class="grid grid-cols-12 gap-8 ">
            <div class="flex col-span-12 pr-12 space-x-2 border-r-2 lg:col-span-3">
                <img src="{{ asset('img/icon/truck.png') }}" class="w-12 h-12" alt="">
                <div>
                    <h4 class="text-xl font-semibold">Free Shipping & Return</h4>
                    <p>All Orders Overs 5 Items</p>
                </div>
            </div>
            <div class="flex col-span-12 pr-12 space-x-3 border-r-2 lg:col-span-3">
                <img src="{{ asset('img/icon/payment.png') }}" class="w-12 h-12" alt="">
                <div>
                    <h4 class="text-xl font-semibold">Secure Payment</h4>
                    <p>We ensure secure payment</p>
                </div>
            </div>
            <div class="flex col-span-12 pr-12 space-x-3 border-r-2 lg:col-span-3">
                <img src="{{ asset('img/icon/payment.png') }}" class="w-12 h-12" alt="">
                <div>
                    <h4 class="text-xl font-semibold">Money Back Guarantee</h4>
                    <p>Any back withing 15 days</p>
                </div>
            </div>
            <div class="flex col-span-12 pr-12 space-x-3 lg:col-span-3">
                <img src="{{ asset('img/icon/customer-service.png') }}" class="w-12 h-12" alt="">
                <div>
                    <h4 class="text-xl font-semibold">Customer Support</h4>
                    <p>Call or email us 24/7</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-green-500">
        <div class="container p-4 mx-auto mt-12 ">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 lg:col-span-4 lg:border-r lg:rounded">
                    <div class="flex space-x-4 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path
                                d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                            <path
                                d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                        </svg>
                        <h2 class="text-xl font-semibold">HEAD OFFICE</h2>
                    </div>
                    <div class="flex space-x-4 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd"
                                d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                                clip-rule="evenodd" />
                        </svg>
                        <p class="text-sm">Address:</p>
                        <p class="pl-4 text-sm ">2nd Floor, House#17, Road # 1, Mohammadia Housing society</p>
                    </div>
                    <div class="flex items-center space-x-4 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd"
                                d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z"
                                clip-rule="evenodd" />
                        </svg>
                        <p class="text-sm ">Hotline:</p>
                        <p class="pl-4 text-sm">01615597820</p>
                    </div>
                    <div class="flex items-center space-x-4 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path
                                d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
                            <path
                                d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
                        </svg>
                        <p class="text-sm ">E-mail :</p>
                        <p class="pl-4 text-sm">softitglobal@gmail.com</p>
                    </div>
                </div>
                <div class="col-span-12 text-white lg:col-span-2 lg:border-r lg:rounded-r">
                    <h4 class="text-xl font-semibold">Pages</h4>
                    <p class="text-sm "><a href="#">About us</a></p>
                    <p class="text-sm "><a href="#">Privacy Policy</a></p>
                    <p class="text-sm "><a href="#">Terms and Condition</a></p>
                </div>
                <div class="col-span-12 pr-2 text-white lg:col-span-3 lg:border-r lg:rounded-r">
                    <h4 class="text-xl font-semibold">PAYMENT PARTNER</h4>
                    <div class="py-1 ">
                        <a href="#">
                            <img src="{{ asset('img/icon/Mega-menu.png') }}" alt="">
                        </a>
                    </div>
                    <h4 class="pt-6 text-xl font-semibold">DELIVERY PARTNER</h4>
                    <div class="py-1 ">
                       <a href="#">
                        <img src="{{ asset('img/icon/Mega-menu-2.png') }}" alt="">
                       </a>
                    </div>
                </div>
                <div class="col-span-12 text-white lg:col-span-3">
                    <h4 class="text-xl font-semibold">LIVE CHAT</h4>
                    <div>
                        <a href="#">
                            <img src="{{ asset('img/icon/whatsapp.png') }}" class="rounded-md w-36" alt="">
                        </a>
                    </div>
                    <h4 class="pt-6 text-xl font-semibold">FOLLOW US</h4>
                    <div class="flex py-1 space-x-4">
                        <div class="text-blue-900 ">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-8 h-8 bi bi-facebook" viewBox="0 0 16 16">
                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                                  </svg>
                            </a>
                        </div>
                        <div class="text-blue-400 ">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-8 h-8 bi bi-twitter" viewBox="0 0 16 16">
                                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15"/>
                                  </svg>
                            </a>
                        </div>
                        <div class="text-blue-800 ">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-8 h-8 bi bi-linkedin" viewBox="0 0 16 16">
                                    <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                                  </svg>
                            </a>
                        </div>
                        <div class="text-red-600 ">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-8 h-8 bi bi-youtube" viewBox="0 0 16 16">
                                    <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/>
                                  </svg>
                            </a>
                        </div>
                        <div class=" text-lime-400">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="w-8 h-8 bi bi-whatsapp" viewBox="0 0 16 16">
                                    <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                                  </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-[#199724;]">
        <div class="container text-center text-white">
            <a href="#">
                <p>© 2022. All Rights Reserved By Softitglobal & Developed By SoftitGlobal.com</p>
            </a>
        </div>

    </section>
</body>

</html>
