@extends('admin.layouts.app')
@section('breadcrumb')
    <x-breadcrumb pageone="Portfolio" pageoneRoute="{{ route('portfolio.index') }}" pagetwo="Create" />
@endsection
@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <p><strong>Opps Something went wrong</strong></p>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="bg-white dark:bg-gray-800 dark:text-slate-400 p-2">
    <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <form action="{{ route('portfolio.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <x-form.input label="Portfolio Title" name="title" />
                    <x-form.select label="Select Category" name="category_id" :data="$categories" />
                    <x-form.select-status />

                    <div class="py-3 font-extrabold flex items-center text-lg text-gray-600 before:flex-[1_1_0%] before:border-t before:border-gray-200 before:me-6 after:flex-[1_1_0%] after:border-t after:border-gray-200 after:ms-6 dark:text-white dark:before:border-gray-600 dark:after:border-gray-600">
                        Thumbnail Section</div>
                    <div class="grid grid-cols-2 gap-10">
                        <div class="col-span-2 lg:col-span-1">
                            <div class="my-2 md:flex">
                                <div class="w-full">
                                    <label for="photoThubnail" class="py-2">Photo Thumbnail</label>
                                    <input class="photoThumbnail" type="file" id="photoThubnail" name="thumbnail">
                                </div>
                            </div>
                        </div>
                        <div class="col-span-2 lg:col-span-1">
                            <div class="my-2 md:flex">
                                <div class="w-full">
                                    <label for="videoThumbnail" class="py-2">Video Thumbnail</label>
                                    <input class="videoThumbnail" type="file" id="videoThumbnail" name="video">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="py-3 font-extrabold flex items-center text-lg text-gray-600 before:flex-[1_1_0%] before:border-t before:border-gray-200 before:me-6 after:flex-[1_1_0%] after:border-t after:border-gray-200 after:ms-6 dark:text-white dark:before:border-gray-600 dark:after:border-gray-600">
                        Portfolo Section</div>
                    <div class="">
                        <div class="grid grid-cols-2 gap-5" id="portfolioImageSection">

                        </div>
                    </div>

                    <div class="flex justify-between">
                        <x-form.submit-button />
                        <div>
                            <button type="button" id="addVideoButton"
                                class="inline-flex items-center justify-center gap-2 px-3 py-1 my-2 text-sm font-medium text-gray-700 align-middle transition-all bg-white border rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m15.75 10.5 4.72-4.72a.75.75 0 0 1 1.28.53v11.38a.75.75 0 0 1-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25h-9A2.25 2.25 0 0 0 2.25 7.5v9a2.25 2.25 0 0 0 2.25 2.25Z" />
                                </svg>

                                Add Video
                            </button>
                            <button type="button" id="addImageButton"
                                class="inline-flex items-center justify-center gap-2 px-3 py-1 my-2 text-sm font-medium text-gray-700 align-middle transition-all bg-white border rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                </svg>
                                Add Image
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('style')
    <link rel="stylesheet" href="{{ asset('css/dropify.min.css') }}">
    <style>
        .dropify-message p {
            font-size: 24px
        }
    </style>
@endpush

@push('script')
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="{{ asset('js/dropify.min.js') }}"></script>
<script>
    $(document).ready(function() {
        photoThubnail();
        videoThubnail();
        $(document).on('click', '#addImageButton', function() {
            $('#portfolioImageSection').append(
                `
                <div class="col-span-2 p-4 border lg:col-span-1">
                    <input class="imagePortfolio" type="file" id="imagePortfolio" name="portfolio_image[]">
                    <input type="text" name="captions[]" class="block w-full px-4 py-3 text-sm border-gray-200 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" placeholder="Caption">
                </div>
            `
            );
            imagePortfolio();
        });

        $(document).on('click', '#addVideoButton', function() {
            $('#portfolioImageSection').append(
                `
                <div class="col-span-2 p-4 border lg:col-span-1">
                    <input class="videoPortfolio" type="file" id="videoPortfolio" name="portfolio_video[]">
                    <input type="text" name="video_caption[]"
                        class="block w-full px-4 py-3 text-sm border-gray-200 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                        placeholder="Caption">
                </div>
            `
            );
            videoPortfolio();
        });


        function photoThubnail() {
            $('.photoThumbnail').dropify({
                messages: {
                    'default': 'Image file drop here or click',
                    'replace': 'Drag and drop or click to replace',
                    'remove': 'Remove',
                    'error': 'Ooops, something wrong happended.'
                }
            });
        }

        function videoThubnail() {
            $('.videoThumbnail').dropify({
                messages: {
                    'default': 'Video file drop here or click',
                    'replace': 'Drag and drop or click to replace',
                    'remove': 'Remove',
                    'error': 'Ooops, something wrong happended.'
                }
            });
        }

        function videoPortfolio() {
            $('.videoPortfolio').dropify({
                messages: {
                    'default': 'Video file drop here or click',
                    'replace': 'Drag and drop or click to replace',
                    'remove': 'Remove',
                    'error': 'Ooops, something wrong happended.'
                }
            });
        }

        function imagePortfolio() {
            $('.imagePortfolio').dropify({
                messages: {
                    'default': 'Image file drop here or click',
                    'replace': 'Drag and drop or click to replace',
                    'remove': 'Remove',
                    'error': 'Ooops, something wrong happended.'
                }
            });
        }

    });
</script>
@endpush
