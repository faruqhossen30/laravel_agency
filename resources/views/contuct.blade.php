@extends('layouts.app')
@section('title', 'Comment Jet | Price')
@section('content')


    <section class="container mx-auto">

        <div class="bg-[#E4E2DF] p-4 lg:p-[80px] rounded-3xl">
            <div class=" text-center pb-4">
                <h4 class="text-[18px] lg:text-[22px] leading-6 lg:leading-9">Contact Us</h4>
                <h2 class=" py-2 text-[38px] lg:text-[64px] leading-[44px] lg:leading-[82px]">Submit a request</h2>
                <p class="text-base lg:text-[22px] leading-6 lg:leading-9">Get in Touch, If you have a quarry remaining
                    contact at <a href="#" class=" text-blue-600">support@desshare.com</a></p>
            </div>

            <form class="mx-auto">
                <div class="grid grid-cols-2 gap-8">
                    <div class="col-span-2 lg:col-span-1 relative z-0 w-full mb-2 lg:mb-10 group">
                        <input type="text" name="floating_first_name" id="floating_first_name"
                            class="block py-5 px-0 w-full text-[22px]  bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                        <label for="floating_first_name"
                            class="peer-focus:font-medium absolute text-base lg:text-[22px] leading-6 lg:leading-9 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Your
                            Name</label>
                    </div>
                    <div class="col-span-2 lg:col-span-1 relative z-0 w-full mb-10 group">
                        <input type="email" name="floating_email" id="floating_email"
                            class="block py-5 px-0 w-full text-[22px] text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                        <label for="floating_email"
                            class="peer-focus:font-medium absolute text-base lg:text-[22px] leading-6 lg:leading-9 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Your
                            Email Address</label>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-8">
                    <div class="col-span-2 lg:col-span-1 relative z-0 w-full mb-2 lg:mb-10 group">
                        <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="floating_phone" id="floating_phone"
                            class="block py-5 px-0 w-full text-[22px] text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                        <label for="floating_phone"
                            class="peer-focus:font-medium absolute text-base lg:text-[22px] leading-6 lg:leading-9 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Your
                            Phone Number</label>
                    </div>
                    <div class="col-span-2 lg:col-span-1 relative z-0 w-full mb-10 group">
                        <input type="text" name="subject" id="subject"
                            class="block py-5 px-0 w-full text-[22px] text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                        <label for="subject"
                            class="peer-focus:font-medium absolute text-base lg:text-[22px] leading-6 lg:leading-9 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Subject</label>
                    </div>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="description" id="description"
                        class="block py-5 px-0 w-full text-[22px] text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required />
                    <label for="description"
                        class="peer-focus:font-medium absolute text-base lg:text-[22px] leading-6 lg:leading-9 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Description</label>
                </div>
                <div class="flex space-x-4 items-center mb-10">
                    <img src="{{ asset('img/icon/copy-plus.png') }}" class=" h-6" alt="">
                    <p class=" text-base lg:text-[22px] leading-6 lg:leading-9">Attachments(optional)</p>
                </div>
                <p class="text-[15px] leading-6 lg:leading-9 py-2">Please enter the details of your request. A member of our
                    support staff will respond as soon as possible.</p>


                <button type="submit"
                class="inline-block text-center text-[20px] border-2 font-semibold border-black py-[20px] px-6 shadow-black mr-auto rounded-lg leading-[18px] w-full"
                style="box-shadow: 6px 6px 0px 0px black; border-width:3px">Submit</button>
            </form>
        </div>
    </section>


    <x-section-start-use />

@endsection
