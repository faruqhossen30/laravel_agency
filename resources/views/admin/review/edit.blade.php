@extends('admin.layouts.app')
@section('breadcrumb')
    <x-breadcrumb pageone="Review" pageoneRoute="{{ route('review.index') }}" pagetwo="Edit" />
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
                <form action="{{ route('review.update',$review->id) }}" method="POST" enctype="multipart/form-data" class=" space-y-1">
                    @csrf
                    @method('PUT')
                    <x-form.input label="Buyer Name" name="name" value="{{ $review->name }}" />
                    <x-form.input label="Rating" name="rating" type="number" value="{{ $review->rating }}" />
                    <x-form.input label="Review Date" name="date" type="date"
                            value="{{ $review->date->format('Y-m-d') }}" />
                    <div class="py-1">
                            <label for="review_type_id">Revie Type</label>
                            <select name="review_type_id" id="review_type_id"
                                class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                                <option value="">Review Type</option>
                                @foreach ($types as $type)
                                    <option value="{{ $type->id }}" @if ($type->id == $review->review_type_id) selected @endif>
                                        {{ $type->name }}</option>
                                @endforeach
                            </select>
                            @error('review_type_id')
                                <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                            @enderror
                    </div>
                    <div class="py-1">
                            <label for="category_id">Select Category</label>
                            <select name="category_id" id="category_id"
                                class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                                <option value="">Review Type</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"  @if ($category->id == $review->category_id) selected @endif>{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                            @enderror
                    </div>

                    <x-form.input label="Review URL" name="revie_url" type="text"
                            value="{{ $review->review_url }}" />
                    <div class="py-2">
                            <label for="review">Review Text</label>
                            <textarea name="review" id="review"
                                class="py-3 text-black px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                                rows="5" placeholder="This is a review text."> {{ $review->review }}</textarea>
                            @error('review')
                                <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                            @enderror
                    </div>
                    <x-form.select-status :status="$review->status" />
                    <hr>

                    <div class="md:flex md:space-x-6">
                        <div class="max-w-md">
                            <input class="dropify" type="file" id="myDropify" name="thumbnail"
                                data-default-file="{{ asset('uploads/review/' . $review->thumbnail) }}">
                        </div>
                    </div>
                    <x-form.submit-button title="Update" />
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
            $('.dropify').dropify({
                messages: {
                    'default': 'Drag and drop a file here or click',
                    'replace': 'Drag and drop or click to replace',
                    'remove': 'Remove',
                    'error': 'Ooops, something wrong happended.'
                }
            });
        });
    </script>
@endpush






