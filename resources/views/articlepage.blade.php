@extends('layouts.app')
@section('title', 'Comment Jet | Price')
@section('content')

    <section class="container mx-auto">
        <div class="grid grid-cols-12 gap-3 ">
            <div class="hidden lg:block lg:col-span-2">
                <div class="flex space-x-2 py-2">
                    <img src="{{asset('img/icon/copy-plus.png')}}" alt="">
                    <span class="text-base font-semibold">Categories</span>
                </div>
                <div class="space-y-3">
                    <a href="#" class="inline-block text-base font-semibold leading-[18px] bg-[#9FE870] text-black py-3 px-4 rounded-lg">
                        All Article
                    </a>
                    <a href="#" class="inline-block text-base font-semibold leading-[18px] bg-gray-200 text-black py-3 px-4 rounded-lg">
                        People First
                    </a>
                    <a href="#" class="inline-block text-base font-semibold leading-[18px] bg-gray-200 text-black py-3 px-4 rounded-lg">
                        All Article
                    </a>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-10 divide-y-2 ">
                <h1 class=" text-[38px] lg:text-[64px] leading-[82px] font-medium lg:pb-8">All Articles</h1>
                <div class="grid grid-cols-2 py-10 gap-[54px]">
                    <div class=" col-span-2 lg:col-span-1">
                        <img src="{{asset('img/blog/blogpag.png')}}" class=" w-full" alt="">
                        <h2 class="font-semibold text-[22px] leading-8 lg:text-2xl py-4">How do I share my feedback?</h2>
                        <div class="flex space-x-4 items-center">
                            <img src="{{asset('img/blog/imag.png')}}" alt="">
                            <p class="text-[#7C7C7C] font-semibold text-base leading-8">Jeatly setu</p>
                        </div>
                    </div>
                    <div class=" col-span-2 lg:col-span-1 divide-y-2 space-y-4">
                        <div class="flex space-x-[25px] ">
                            <img src="{{asset('img/blog/comment1.png')}}" alt="">
                            <h4 class="font-semibold text-base lg:text-[18px] leading-[22px]">Community workshop: Automatically create and send PDF reports from typeform responses</h4>
                        </div>
                        <div class="flex pt-4 space-x-[25px] ">
                            <img src="{{asset('img/blog/comment2.png')}}" alt="">
                            <h4 class="font-semibold text-base lg:text-[18px] leading-[22px]">Community workshop: Automatically create and send PDF reports from typeform responses</h4>
                        </div>
                        <div class="flex pt-4 space-x-[25px]">
                            <img src="{{asset('img/blog/comment3.png')}}" alt="">
                            <h4 class="font-semibold text-base lg:text-[18px] leading-[22px]">Community workshop: Automatically create and send PDF reports from typeform responses</h4>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 py-10 gap-9 lg:gap-[54px]">
                    <div class=" col-span-2 lg:col-span-1 ">
                        <img src="{{asset('img/blog/shearfeedback.png')}}" class=" w-full" alt="">
                        <h2 class="font-semibold text-[22px] leading-8 lg:text-2xl py-4">How do I share my feedback?</h2>
                        <div class="flex space-x-4 items-center">
                            <img src="{{asset('img/blog/imag.png')}}" alt="">
                            <p class="text-[#7C7C7C] font-semibold text-base leading-8">Jeatly setu</p>
                        </div>
                    </div>
                    <div class=" col-span-2 lg:col-span-1 ">
                        <img src="{{asset('img/blog/automitacallyco.png')}}" class=" w-full" alt="">
                        <h2 class="font-semibold text-[22px] leading-[22px] lg:text-[18px] py-4">Automatically create and send PDF reports from typeform responses</h2>
                        <div class="flex space-x-4 items-center">
                            <img src="{{asset('img/blog/imag.png')}}" alt="">
                            <p class="text-[#7C7C7C] font-semibold text-base leading-8">Jeatly setu</p>
                        </div>
                    </div>
                    <div class=" col-span-2 lg:col-span-1 ">
                        <img src="{{asset('img/blog/feedback2.png')}}" class=" w-full" alt="">
                        <h2 class="font-semibold text-[22px] leading-8 lg:text-2xl py-4">How do I share my feedback?</h2>
                        <div class="flex space-x-4 items-center">
                            <img src="{{asset('img/blog/imag.png')}}" alt="">
                            <p class="text-[#7C7C7C] font-semibold text-base leading-8">Jeatly setu</p>
                        </div>
                    </div>
                    <div class=" col-span-2 lg:col-span-1 ">
                        <img src="{{asset('img/blog/feedback3.png')}}" class=" w-full" alt="">
                        <h2 class="font-semibold text-[22px] leading-8 lg:text-2xl py-4">How do I share my feedback?</h2>
                        <div class="flex space-x-4 items-center">
                            <img src="{{asset('img/blog/imag.png')}}" alt="">
                            <p class="text-[#7C7C7C] font-semibold text-base leading-8">Jeatly setu</p>
                        </div>
                    </div>
                </div>
            </div>
          </div>
    </section>



    <x-section-start-use />

@endsection
