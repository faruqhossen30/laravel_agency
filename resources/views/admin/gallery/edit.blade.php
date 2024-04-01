@extends('admin.layouts.app')
@section('breadcrumb')
    <x-breadcrumb pageone="Blog" pageoneRoute="{{ route('blog.index') }}" pagetwo="Edit" />
@endsection
@section('content')
    <div>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        @endif
    </div>
    <div class="flex flex-col gap-6">
        <div class="card">
            <div class="card-header">
                <div class="p-6">

                    <form action="{{ route('blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')




                        {{-- <x-form.input name="title" label="Title" value="{{ $blog->title }}" />
                        <x-form.select name="category_id" label="Select Category" :data="$categories" :id="$blog->category_id" />
                        <textarea name="description" id="editor" cols="30" rows="10">{!! $blog->description !!}</textarea>
                        <input name="thumbnail" class="dropify space-x-4" type="file" id="myDropify"
                            data-default-file="{{ asset('uploads/blog/' . $blog->thumbnail) }}"> --}}




                        <div class="grid grid-cols-12 gap-4">
                            <div class="col-span-9 space-y-2">
                                <x-form.input name="title" label="Title" value="{{ $blog->title }}" />
                                <label for="description"
                                    class="text-gray-500 dark:text-gray-500 text-sm font-medium">Description</label>
                                <textarea name="description" id="editor" cols="30" rows="10">{!! $blog->description !!}</textarea>
                            </div>
                            <div class="col-span-3 pt-1 space-y-2">
                                <x-form.select name="category_id" label="Select Category" :data="$categories"
                                    :id="$blog->category_id" />
                                <label for="thumbnail" class="text-gray-500 dark:text-gray-500 text-sm font-medium">Image</label>
                                <input name="thumbnail" class="dropify space-x-4" type="file" id="myDropify"
                                    data-default-file="{{ asset('uploads/blog/' . $blog->thumbnail) }}">
                            </div>
                        </div>

                        <x-form.submit-button />
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
@push('styles')
    <script src="{{ asset('js/ckeditor.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/ckeditor.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dropify.min.css') }}">
    <style>
        .ck-editor__editable_inline {
            height: 300px;
        }

        .dropify-message p {
            font-size: 24px
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{ asset('js/dropify.min.js') }}"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.log(error);
            });
    </script>
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
            $('.js-example-basic-multiple').select2();
        });
    </script>
@endpush
