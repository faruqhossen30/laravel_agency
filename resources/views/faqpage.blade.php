@extends('layouts.app')
@section('title', 'Comment Jet | Price')
@section('content')

    <section class="container mx-auto">
        <div class="py-[30px] lg:p-[54px] bg-[#9FE870] rounded-3xl my-8">
            <div class="px-6 lg:px-4 text-center">
                <span class="text-[18px] lg:text-[22px] leading-[36px]">Frequently Asked Questions</span>
                <h2 class="text-[38px] lg:text-[64px] leading-[44px] lg:leading-[82px] font-medium py-2">What do you need
                    help with?</h2>
                <p class="text-[18px] lg:text-[22px] leading-[28px] lg:leading-[36px]">Please check the answers from us, If
                    you have a quarry remaining contact at <a href="#" class=" text-blue-500">support@feedbex.com</a>
                </p>
                <div class="relative z-0 w-full mb-5 group text-left">
                    <label for="floating_email"
                        class="py-2 peer-focus:font-medium absolute text-base lg:text-[22px] leading-9 text-black dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Search</label>
                    <input type="email" name="floating_email" id="floating_email"
                        class="block py-3 my-3 pl-[65px] px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-700 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required />
                </div>
            </div>
        </div>
        <div class="text-center py-7">
            <h2 class="text-[38px] lg:text-[64px] leading-[44px] lg:leading-[82px] font-medium">Trending Topics</h2>
            <p class=" pt-[18px] text-[18px] lg:text-[22px] leading-6 lg:leading-9">Here's whet other people are ﬁnding most
                useful right now:</p>
        </div>

        <div class="hidden lg:grid grid-cols-12 gap-8">
            <div class="col-span-4 bg-[#E4E2DF] rounded-[20px] p-6">
                <div class="flex space-x-3 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="w-6 h-6 bg-[#9FE870] rounded-full p-1 text-white">
                        <path fill-rule="evenodd"
                            d="M5.337 21.718a6.707 6.707 0 0 1-.533-.074.75.75 0 0 1-.44-1.223 3.73 3.73 0 0 0 .814-1.686c.023-.115-.022-.317-.254-.543C3.274 16.587 2.25 14.41 2.25 12c0-5.03 4.428-9 9.75-9s9.75 3.97 9.75 9c0 5.03-4.428 9-9.75 9-.833 0-1.643-.097-2.417-.279a6.721 6.721 0 0 1-4.246.997Z"
                            clip-rule="evenodd" />
                    </svg>
                    <h4 class="text-[22px] leading-9">Get started with Typeform</h4>
                </div>
                <span class="text-sm leading-[26px]">New to Typeform? Here's how to get started on your first
                    creation.</span>
            </div>
            <div class="col-span-4 bg-[#E4E2DF] rounded-[20px] p-6">
                <div class="flex space-x-3 items-start">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="min-w-6 h-6 bg-[#9FE870] rounded-full p-1 text-white">
                        <path fill-rule="evenodd"
                            d="M5.337 21.718a6.707 6.707 0 0 1-.533-.074.75.75 0 0 1-.44-1.223 3.73 3.73 0 0 0 .814-1.686c.023-.115-.022-.317-.254-.543C3.274 16.587 2.25 14.41 2.25 12c0-5.03 4.428-9 9.75-9s9.75 3.97 9.75 9c0 5.03-4.428 9-9.75 9-.833 0-1.643-.097-2.417-.279a6.721 6.721 0 0 1-4.246.997Z"
                            clip-rule="evenodd" />
                    </svg>
                    <h4 class="text-[22px] leading-9">Community workshop: Automatically create and send PDF reports from
                        typeform responses</h4>
                </div>
                <span class="text-sm leading-[26px]">Discover an effortless way to generate tailored reports for survey and quiz participant...</span>
            </div>
            <div class="col-span-4 bg-[#E4E2DF] rounded-[20px] p-6">
                <div class="flex space-x-3 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="w-6 h-6 bg-[#9FE870] rounded-full p-1 text-white">
                        <path fill-rule="evenodd"
                            d="M5.337 21.718a6.707 6.707 0 0 1-.533-.074.75.75 0 0 1-.44-1.223 3.73 3.73 0 0 0 .814-1.686c.023-.115-.022-.317-.254-.543C3.274 16.587 2.25 14.41 2.25 12c0-5.03 4.428-9 9.75-9s9.75 3.97 9.75 9c0 5.03-4.428 9-9.75 9-.833 0-1.643-.097-2.417-.279a6.721 6.721 0 0 1-4.246.997Z"
                            clip-rule="evenodd" />
                    </svg>
                    <h4 class="text-[22px] leading-9">Embed your typeform on popular site builders</h4>
                </div>
                <span class="text-sm leading-[26px]">How to embed your Typeform on Wordpress, Squarespace, Webflow, Shopify, or Google Sites</span>
            </div>
            <div class="col-span-4 bg-[#E4E2DF] rounded-[20px] p-6">
                <div class="flex space-x-3 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="w-6 h-6 bg-[#9FE870] rounded-full p-1 text-white">
                        <path fill-rule="evenodd"
                            d="M5.337 21.718a6.707 6.707 0 0 1-.533-.074.75.75 0 0 1-.44-1.223 3.73 3.73 0 0 0 .814-1.686c.023-.115-.022-.317-.254-.543C3.274 16.587 2.25 14.41 2.25 12c0-5.03 4.428-9 9.75-9s9.75 3.97 9.75 9c0 5.03-4.428 9-9.75 9-.833 0-1.643-.097-2.417-.279a6.721 6.721 0 0 1-4.246.997Z"
                            clip-rule="evenodd" />
                    </svg>
                    <h4 class="text-[22px] leading-9">Logic troubleshooting</h4>
                </div>
                <span class="text-sm leading-[26px]">Also known as question branching, Logic lets you give users a more personalized experience that saves time.</span>
            </div>
            <div class="col-span-4 bg-[#E4E2DF] rounded-[20px] p-6">
                <div class="flex space-x-3 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="w-6 h-6 bg-[#9FE870] rounded-full p-1 text-white">
                        <path fill-rule="evenodd"
                            d="M5.337 21.718a6.707 6.707 0 0 1-.533-.074.75.75 0 0 1-.44-1.223 3.73 3.73 0 0 0 .814-1.686c.023-.115-.022-.317-.254-.543C3.274 16.587 2.25 14.41 2.25 12c0-5.03 4.428-9 9.75-9s9.75 3.97 9.75 9c0 5.03-4.428 9-9.75 9-.833 0-1.643-.097-2.417-.279a6.721 6.721 0 0 1-4.246.997Z"
                            clip-rule="evenodd" />
                    </svg>
                    <h4 class="text-[22px] leading-9">Using Hidden Fields</h4>
                </div>
                <span class="text-sm leading-[26px]">Hidden Fields let you use data you’ve already collected, to track information and make your typeforms more personal.</span>
            </div>
            <div class="col-span-4 bg-[#E4E2DF] rounded-[20px] p-6">
                <div class="flex space-x-3 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="w-6 h-6 bg-[#9FE870] rounded-full p-1 text-white">
                        <path fill-rule="evenodd"
                            d="M5.337 21.718a6.707 6.707 0 0 1-.533-.074.75.75 0 0 1-.44-1.223 3.73 3.73 0 0 0 .814-1.686c.023-.115-.022-.317-.254-.543C3.274 16.587 2.25 14.41 2.25 12c0-5.03 4.428-9 9.75-9s9.75 3.97 9.75 9c0 5.03-4.428 9-9.75 9-.833 0-1.643-.097-2.417-.279a6.721 6.721 0 0 1-4.246.997Z"
                            clip-rule="evenodd" />
                    </svg>
                    <h4 class="text-[22px] leading-9">How to publish your typeform</h4>
                </div>
                <span class="text-sm leading-[26px]">Ready to roll? Hit ‘Publish’ to make your typeform live to the world. Here’s a little help in case of stage fright (we get it!)</span>
            </div>
        </div>
    </section>

    <x-frontend.section-faq />
    <x-section-start-use />


@endsection
