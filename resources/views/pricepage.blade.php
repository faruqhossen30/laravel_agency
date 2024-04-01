@extends('layouts.app')
@section('title', 'Comment Jet | Price')
@section('content')

    <section class=" container mx-auto justify-center mt-24 lg:mt-0">

        <h2
            class="max-w-4xl text-[38px] lg:text-[64px] leading-[44px] lg:leading-[82px] text-center font-medium py-6 mx-auto">
            The digital content solution, for the best price.</h2>
        <p class="text-[18px] lg:text-2xl leading-7 lg:leading-9 font-normal text-center	">Revolutionize your workflow:
            experience the power of
            consolidation</p>
        {{-- pricing button start --}}
        <div class="container flex justify-center mx-auto my-5 items-center">
            <div class="px-2 text-[18px] lg:text-[22px] leading-9 font-semibold"><span class=" hidden lg:inline-block">Buy
                    Monthly</span> <span class="lg:hidden">Monthly</span></div>
            <label class="inline-flex items-center mb-5 cursor-pointer my-2 px-2">
                <input type="checkbox" value="" class="sr-only peer" checked>
                <div
                    class="relative w-11 lg:w-20 h-6 lg:h-12 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:w-5 after:h-5 lg:after:w-10 lg:after:h-10 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                </div>
                <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300"></span>
            </label>
            <div class="px-2 lg:text-blue-600 text-[18px] lg:text-[22px] leading-9 font-semibold">
                <span class="hidden lg:inline-block">Buy Annually</span>
                <span class="lg:hidden">Yearly</span>
                <span class=" p-1 bg-[#02A75024] rounded-sm text-green-600 text-sm	">Save 14%</span>
            </div>
        </div>
        {{-- pricing button end --}}



    </section>


    <section class="container mx-auto">
        <div class="grid grid-cols-12 gap-3">
            <div class="col-span-12 lg:col-span-6 bg-[#E4E2DF] p-10 rounded-lg">
                <h3 class="text-[42px] leading-[54px] font-medium mt-10">Professionals</h3>
                <hr class="h-px my-6 bg-gray-400 border-0 dark:bg-gray-700">
                <div class="space-y-3">
                    <div class="flex items-center space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                        </svg>
                        <span>All Basic Services</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                        </svg>
                        <span>Create Project Timeline</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                        </svg>
                        <span>Up to 10 Members</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                        </svg>
                        <span>100 Quick Shares</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                        </svg>
                        <span>Up-to 100Mb File Upload</span>
                    </div>
                </div>
                <hr class="h-px my-6 bg-gray-400 border-0 dark:bg-gray-700">
                <div class="lg:flex lg:justify-between items-center">
                    <div class="flex items-center space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                        </svg>
                        <span class="text-2xl leading-[54px] font-semibold">Free for Now</span>
                    </div>
                    <div class="pt-4 lg:pt-0">
                        <x-button.shadowbuttonlink title="Subscribe" route="#" classname="bg-[white]" />
                    </div>
                </div>
            </div>
            <div class="hidden lg:block col-span-6 bg-[#9FE870] p-10 rounded-lg">
                <button class="text-base border-black border rounded-full px-2 my-2 font-normal	">MOST PREMIUM</button>
                <h3 class="text-[42px] leading-[54px] font-medium ">Unlimited</h3>
                <hr class="h-px my-6 bg-gray-400 border-0 dark:bg-gray-700">
                <div class="flex gap-36">
                    <div class="space-y-3">
                        <div class="flex items-center space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                            <span>All Basic Services</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                            <span>Create Project Timeline</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                            <span>Up to 100 Members</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                            <span>Unlimited Quick Shares</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                            <span>Up-to 5Gb File Upload</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                            <span>CommentJet Wallet</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                            <span>Project Extension</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                            <span>Project Milestone Support</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                            <span>Weekly Updates</span>
                        </div>
                    </div>


                </div>
                <hr class="h-px my-6 bg-gray-400 border-0 dark:bg-gray-700">
                <div class="flex justify-between items-center">
                    <div class="flex items-center space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                        </svg>
                        <span class="text-2xl font-semibold">19.50$ / Month</span>
                    </div>
                    <div>
                        <x-button.shadowbuttonlink title="Subscribe" route="#" classname="bg-[white]" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- table start  --}}
    <section class="container mx-auto mt-32 ">
        <h3 class="text-[38px] lg:text-[64px] leading-[44px] lg:leading-[82px] text-center font-medium my-4	">See full feature matrix</h3>
        <hr class="h-px my-6 bg-gray-400 border-0 dark:bg-gray-700">
        <table class="w-full  ">
            <thead>
                <tr class="text-left text-[16px] lg:text-[28px] leading-[20px] lg:leading-9 font-medium">
                    <th>Key features</th>
                    <th>Professionals</th>
                    <th>Unlimited</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-base lg:text-[22px] leading-5 lg:leading-9 font-normal">
                    <td>Number of editable boards</td>
                    <td>04</td>
                    <td>Unlimited</td>
                </tr>
                <tr class="text-base lg:text-[22px] leading-5 lg:leading-9">
                    <td>Templates by Miro</td>
                    <td class="text-[#02A750]"> <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                        </svg>
                    </td>
                    <td class="text-[#02A750]"> <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                        </svg>
                    </td>
                </tr>
                <tr class="text-base lg:text-[22px] leading-5 lg:leading-9">
                    <td>Custom templates</td>
                    <td class="text-[#02A750]"> <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                        </svg>
                    </td>
                    <td class="text-[#02A750]"> <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                        </svg>
                    </td>
                </tr>
            </tbody>
        </table>
        <hr class="h-px my-6 bg-gray-400 border-0 dark:bg-gray-700">
        <table class="w-full  ">
            <thead>
                <tr class="text-left text-[16px] lg:text-[28px] leading-[20px] lg:leading-9 font-medium">
                    <th>Advanced collaboration</th>
                    <th>Professionals</th>
                    <th>Unlimited</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-base lg:text-[22px] leading-5 lg:leading-9">
                    <td>Private board sharing</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr class="text-base lg:text-[22px] leading-5 lg:leading-9">
                    <td>Admin Insights</td>
                    <td class="text-[#02A750]"> <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                        </svg>
                    </td>
                    <td class="text-[#02A750]"> <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                        </svg>
                    </td>
                </tr>
                <tr class="text-base lg:text-[22px] leading-5 lg:leading-9">
                    <td>SCIM user provisioning</td>
                    <td class="text-[#02A750]">
                        -
                    </td>
                    <td class="text-[#02A750]"> <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                        </svg>
                    </td>
                </tr>
            </tbody>
        </table>
        <hr class="h-px my-6 bg-gray-400 border-0 dark:bg-gray-700">
        <table class="w-full  ">
            <thead>
                <tr class="text-left text-[16px] lg:text-[28px] leading-[20px] lg:leading-9 font-medium">
                    <th>Support & success</th>
                    <th>Professionals</th>
                    <th>Unlimited</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-base lg:text-[22px] leading-5 lg:leading-9">
                    <td>Help Center - knowledge base</td>
                    <td class="text-[#02A750]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                        </svg>
                    </td>
                    <td class="text-[#02A750]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                        </svg>
                    </td>
                </tr>
                <tr class="text-base lg:text-[22px] leading-5 lg:leading-9">
                    <td>Email Support</td>
                    <td> - </td>
                    <td class="text-[#02A750]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                        </svg>
                    </td>
                </tr>
                <tr class="text-base lg:text-[22px] leading-5 lg:leading-9">
                    <td>Onboarding Program</td>
                    <td class="text-[#02A750]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                        </svg>
                    </td>
                    <td class="text-[#02A750]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                        </svg>
                    </td>
                </tr>
            </tbody>
        </table>
        <hr class="h-px my-6 bg-gray-400 border-0 dark:bg-gray-700">
        <table class="w-full">
            <thead>
                <tr>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-base lg:text-[22px] leading-5 lg:leading-9">
                    <td></td>
                    <td><x-button.shadowbuttonlink title="Subscribe" route="#" classname="bg-[white]" /></td>
                    <td><x-button.shadowbuttonlink title="Subscribe" route="#" classname="bg-[white]" /></td>
                </tr>
            </tbody>
        </table>
        <hr class="h-px my-6 bg-gray-400 border-0 dark:bg-gray-700">



    </section>
    {{-- table end  --}}
    <x-frontend.section-faq />
    <x-section-start-use />

@endsection
