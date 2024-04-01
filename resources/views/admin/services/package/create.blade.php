@extends('admin.layouts.app')
@section('breadcrumb')
    <x-breadcrumb pageone="Service Pakage" pageoneRoute="{{ route('service.index') }}" pagetwo="Create" />
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
                <form action="{{ route('service.package.store', $service->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="flex justify-between">
                        <x-package.package-starter :package="$package" />
                        <x-package.package-standard :package="$package" />
                        <x-package.package-advance :package="$package" />

                    </div>

                    <x-form.submit-button />
                </form>
            </div>
        </div>
    </div>
</div>


@endsection

@push('style')
    <script src="{{ asset('js/ckeditor.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/ckeditor.css') }}">
    <style>
        .ck-editor__editable_inline {
            height: 300px;
        }

        .dropify-message p {
            font-size: 24px
        }
    </style>
@endpush

@push('script')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="{{ asset('plugin/Sortable.min.js') }}"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor2'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor3'))
            .catch(error => {
                console.error(error);
            });
    </script>

@endpush











