@extends('admin.layouts.app')
@section('breadcrumb')
<x-breadcrumb pageone="Category" pageoneRoute="{{route('category.index')}}" pagetwo="Create"  />
@endsection
@section('content')
<div class="flex flex-col gap-6 ">
	<div class="card">
		<div class="card-header">
		<div class="p-6">

			<form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
				<x-form.input label="Category Name" name="name" />
                <div class="col-span-3 pt-1 space-y-2">
                    <label for="thumbnail" class="text-gray-500 dark:text-gray-500 text-sm font-medium">Image</label>
                    <input name="thumbnail" class="dropify" type="file" id="myDropify">
                </div>
				<x-form.submit-button />
		</form>
	</div>
</div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/dropify.min.css') }}">
    <style>
        .dropify-message p {
            font-size: 24px
        }
    </style>
@endpush

@push('scripts')
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
