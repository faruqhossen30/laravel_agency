<header class="flex justify-between container mx-auto  py-9 px-5 lg:px-0">
    <div class="flex items-center">
        <div class="mr-10">
            <a href="{{route('homepage')}}">
                <img src="{{ asset('img/logo.png') }}" class="h-11" alt="">
            </a>
        </div>
        <nav class="hidden lg:block">
            <div class="max-w-screen-xl px-4 py-3 mx-auto">
                <div class="flex items-center">
                    <ul class="flex flex-row font-medium mt-0 space-x-10">
                        <li>
                            <a href="{{route('homepage')}}"
                                class="text-gray-900 dark:text-white hover:underline font-semibold text-base leading-[18px]">Home</a>
                        </li>
                        <li>
                            <a href="{{route('aboutpage')}}"
                                class="text-gray-900 dark:text-white hover:underline font-semibold text-base leading-[18px]">About</a>
                        </li>
                        <li>
                            <a href="{{route('pricepage')}}"
                                class="text-gray-900 dark:text-white hover:underline font-semibold text-base leading-[18px]">Price</a>
                        </li>
                        <li>
                            <a href="{{route('articlespage')}}"
                                class="text-gray-900 dark:text-white hover:underline font-semibold text-base leading-[18px]">Article</a>
                        </li>
                        <li>
                            <a href="{{route('faqpage')}}"
                                class="text-gray-900 dark:text-white hover:underline font-semibold text-base leading-[18px]">FAQ</a>
                        </li>
                        <li>
                            <a href="{{route('contactpage')}}"
                                class="text-gray-900 dark:text-white hover:underline font-semibold text-base leading-[18px]">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div>
        <nav class="hidden lg:flex space-x-2">
            <a href="#"
                class="text-black rounded-lg border-black border-2 bg-white py-[14px] px-6 text-base leading-[18px] font-semibold">Log
                In</a>
            <a href="#"
                class="text-white rounded-lg bg-green-600 py-[14px] px-6 text-base leading-[18px] font-semibold">Sign
                Up</a>
        </nav>
        <div class="lg:hidden">
            <button type="button"
            data-drawer-target="drawer-top-example" data-drawer-show="drawer-top-example" data-drawer-placement="top" aria-controls="drawer-top-example"
                class="text-white bg-brand hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-brand dark:focus:ring-blue-800">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                </svg>
                <span class="sr-only">Icon description</span>
            </button>
        </div>
    </div>
</header>


<div id="drawer-top-example"
    class="fixed top-0 left-0 right-0 z-40 w-full p-4 transition-transform -translate-y-full bg-white dark:bg-gray-800"
    tabindex="-1" aria-labelledby="drawer-top-label">
    <h5 id="drawer-top-label"
        class="inline-flex items-center mb-4 text-base font-semibold text-gray-500 dark:text-gray-400"><svg
            class="w-4 h-4 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
            viewBox="0 0 20 20">
            <path
                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
        </svg>Top drawer</h5>
    <button type="button" data-drawer-hide="drawer-top-example" aria-controls="drawer-top-example"
        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
        </svg>
        <span class="sr-only">Close menu</span>
    </button>
    <p class="max-w-lg mb-6 text-sm text-gray-500 dark:text-gray-400">Supercharge your hiring by taking advantage of our
        <a href="#" class="text-blue-600 underline font-medium dark:text-blue-500 hover:no-underline">limited-time
            sale</a> for Flowbite Docs + Job Board. Unlimited access to over 190K top-ranked candidates and the #1
        design job board.</p>
    <a href="#"
        class="px-4 py-2 me-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-200 rounded-lg focus:outline-none hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Learn
        more</a>
    <a href="#"
        class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Get
        access <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            fill="none" viewBox="0 0 14 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M1 5h12m0 0L9 1m4 4L9 9" />
        </svg></a>
</div>
