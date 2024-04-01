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
                <form action="{{ route('portfolio.update', $portfolio->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <x-form.input label="Portfolio Title" name="title" value="{{ $portfolio->title }}" />

                    <div class="py-1">
                        <label for="category_id">Select Category</label>
                        <select name="category_id" id="category_id"
                            class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                            <option value="">Select Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @if ($category->id == $portfolio->category_id) selected @endif>
                                    {{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="py-1">
                        <label for="status">Status</label>
                        <select name="status" id="status"
                            class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                            <option value="0" @if ($portfolio->status) selected @endif>Deactive</option>
                            <option value="1" @if ($portfolio->status) selected @endif>Active</option>
                        </select>
                        @error('status')
                            <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div
                        class="py-3 font-extrabold flex items-center text-lg text-gray-800 before:flex-[1_1_0%] before:border-t before:border-gray-200 before:me-6 after:flex-[1_1_0%] after:border-t after:border-gray-200 after:ms-6 dark:text-white dark:before:border-gray-600 dark:after:border-gray-600">
                        Thumbnail Section</div>


                    <div class="grid grid-cols-2 gap-10">
                        <div class="col-span-2 lg:col-span-1">
                            <div class="md:flex my-2">
                                <div class="w-full">
                                    <label for="photoThubnail" class="py-2">Photo Thumbnail</label>
                                    <input class="photoThumbnail" type="file" id="photoThubnail" name="thumbnail"
                                        data-default-file="{{ asset('uploads/portfolio/' . $portfolio->thumbnail) }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-span-2 lg:col-span-1">
                            <div class="md:flex my-2">
                                <div class="w-full">
                                    <label for="videoThumbnail" class="py-2">Video Thumbnail</label>
                                    <input class="videoThumbnail" type="file" id="videoThumbnail" name="video"
                                        data-default-file="{{ asset('uploads/portfolio/' . $portfolio->video) }}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="py-3 flex items-center text-sm text-gray-800 before:flex-[1_1_0%] before:border-t before:border-gray-200 before:me-6 after:flex-[1_1_0%] after:border-t after:border-gray-200 after:ms-6 dark:text-white dark:before:border-gray-600 dark:after:border-gray-600">
                        Add Portfolio Images</div>

                    <div class="">
                        <div class="grid grid-cols-2 gap-5" id="portfolioImageSection">
                            {{-- <div class="col-span-2 lg:col-span-1 border p-4">
                                <input class="dropify" type="file" id="myDropify" name="portfolio_image[]">
                                <input type="text" name="captions[]"
                                    class="py-3 px-4 block w-full border-gray-200 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                                    placeholder="Caption">
                            </div> --}}

                        </div>
                    </div>
                    <div class="flex justify-between">
                        <x-form.submit-button  title=" Update"/>
                        <div>
                            <button type="button" id="addVideoButton"
                                class="py-1 my-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m15.75 10.5 4.72-4.72a.75.75 0 0 1 1.28.53v11.38a.75.75 0 0 1-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25h-9A2.25 2.25 0 0 0 2.25 7.5v9a2.25 2.25 0 0 0 2.25 2.25Z" />
                                </svg>

                                Add Video
                            </button>
                            <button type="button" id="addImageButton"
                                class="py-1 my-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                </svg>
                                Add Image
                            </button>
                        </div>
                    </div>


                    @if ($portfolio->images->count())
                        <div
                            class="py-3 flex items-center text-sm text-gray-800 before:flex-[1_1_0%] before:border-t before:border-gray-200 before:me-6 after:flex-[1_1_0%] after:border-t after:border-gray-200 after:ms-6 dark:text-white dark:before:border-gray-600 dark:after:border-gray-600">
                            Portfolio Images</div>
                        <div>
                            {{-- <h3 class="py-1">Old Image</h3> --}}
                            <div class="flex flex-wrap">
                                @foreach ($portfolio->images as $image)
                                    @if ($image->image)
                                        <div class="relative p-2">
                                            <a href="{{ route('removeportfolionimage', $image->id) }}"
                                                onclick="if (confirm('Delete selected item?')){return true;}else{event.stopPropagation(); event.preventDefault();};"
                                                class="absolute right-0 p-2 mr-2 bg-red-600 rounded-2xl">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-4 h-4 text-white">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                </svg>
                                            </a>
                                            <img src="{{ asset('uploads/portfolio/image/' . $image->image) }}"
                                                class="w-52 h-52 shadow-md rounded-2xl" alt="">
                                        </div>
                                    @else
                                        <div class="relative p-2">
                                            <a href="{{ route('removeportfolionimage', $image->id) }}"
                                                onclick="if (confirm('Delete selected item?')){return true;}else{event.stopPropagation(); event.preventDefault();};"
                                                class="absolute right-0 p-2 mr-2 bg-red-600 rounded-2xl z-10">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-4 h-4 text-white">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                </svg>
                                            </a>
                                            <video autoplay loop muted class="w-52 h-52 shadow-md rounded-2xl">
                                                <source src="{{ asset('uploads/portfolio/video/' . $image->video) }}"
                                                    type="video/mp4">
                                            </video>
                                        </div>

                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @endif
                    <hr>

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
                    <div class="col-span-2 lg:col-span-1 border p-4">
                        <input class="imagePortfolio" type="file" id="imagePortfolio" name="portfolio_image[]">
                        <input type="text" name="captions[]" class="py-3 px-4 block w-full border-gray-200 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" placeholder="Caption">
                    </div>
                `
                );
                imagePortfolio();
            });

            $(document).on('click', '#addVideoButton', function() {
                $('#portfolioImageSection').append(
                    `
                    <div class="col-span-2 lg:col-span-1 border p-4">
                        <input class="videoPortfolio" type="file" id="videoPortfolio" name="portfolio_video[]">
                        <input type="text" name="video_caption[]"
                            class="py-3 px-4 block w-full border-gray-200 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
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
                        'remove' : 'Remove',
                        'error'  : 'Ooops, something wrong happended.'
                    }
                });
            }

            function videoThubnail() {
                $('.videoThumbnail').dropify({
                    messages: {
                        'default': 'Video file drop here or click',
                        'replace': 'Drag and drop or click to replace',
                        'remove' : 'Remove',
                        'error'  : 'Ooops, something wrong happended.'
                    }
                });
            }

            function videoPortfolio() {
                $('.videoPortfolio').dropify({
                    messages: {
                        'default': 'Video file drop here or click',
                        'replace': 'Drag and drop or click to replace',
                        'remove' : 'Remove',
                        'error'  : 'Ooops, something wrong happended.'
                    }
                });
            }

            function imagePortfolio() {
                $('.imagePortfolio').dropify({
                    messages: {
                        'default': 'Image file drop here or click',
                        'replace': 'Drag and drop or click to replace',
                        'remove' : 'Remove',
                        'error'  : 'Ooops, something wrong happended.'
                    }
                });
            }

        });
    </script>
@endpush

