@extends('admin.layouts.app')
@section('breadcrumb')
    <x-breadcrumb pageone="Gallery" pageoneRoute="{{ route('gallery.index') }}" pagetwo="Create" />
@endsection
@section('content')
    <div class="flex flex-col gap-6">
        <div class="card">
            <div class="card-header">
                <div class="p-6">

                    {{-- <form action="{{ route('gallery.store') }}" class="dropzone" id="my-awesome-dropzone" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="thumbnail" />
                    </form> --}}
                    {{-- <form action="{{ route('gallery.store') }}" class="dropzone" id="my-awesome-dropzone">
                        @csrf
                    </form> --}}
                    <form action="{{ route('gallery.store') }}" class="dropzone" id="my-great-dropzone">
                        @csrf
                    </form>

                </div>

            </div>
        </div>
    </div>
@endsection

@push('styles')
@endpush

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    <script>
        Dropzone.options.myGreatDropzone = { // camelized version of the `id`
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 2, // MB
            accept: function(file, done) {
                if (file.name == "justinbieber.jpg") {
                    done("Naha, you don't.");
                } else {
                    done();
                }
            }
        };
    </script>
@endpush
