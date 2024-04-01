@extends('admin.layouts.app')
@section('breadcrumb')
    <x-breadcrumb pageone="Review" pageoneRoute="{{ route('review.index') }}" pagetwo="Create" />
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
                <form action="{{ route('review.store') }}" method="POST" enctype="multipart/form-data" class=" space-y-1">
                    @csrf
                    <x-form.input label="Buyer Name" name="name" />
                        <x-form.input label="Rating" name="rating" type="number" />
                        <x-form.input label="Review Date" name="date" type="date" />
                        <x-form.select label="Review Type" name="review_type_id" :data="$types" />
                        <x-form.select label="Select Category" name="category_id" :data="$categories" />
                        <x-form.input label="Review URL" type="text" name="review_url" type="text" />
                        <x-form.textarea label="Review Text" type="text" name="review" />
                        <div class="md:flex md:space-x-12">
                            <div class="max-w-md">
                                <input class="dropify" type="file" id="myDropify" name="thumbnail">
                            </div>
                        </div>
                        <x-form.select-status />
                    <x-form.submit-button />
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






