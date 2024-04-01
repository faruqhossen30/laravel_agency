@extends('admin.layouts.app')
@section('breadcrumb')
    <div class="flex justify-between">
        <x-breadcrumb pageone="Gallery" />
        <x-button.button-plus route="{{ route('gallery.create') }}" title="Upload Photo" />
    </div>
@endsection
@section('content')
    <div class="grid grid-cols-12 gap-6">

        @forelse ($thumbnails as $gallary)
            <div class="col-span-6 md:col-span-4 lg:col-span-3 relative group">
                <form action="{{ route('gallery.destroy', $gallary->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                    onclick="return confirm('Are you  sure to delete?')"
                    class="absolute right-0 p-2 hidden group-hover:block transition duration-100">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 text-red-600">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                        </svg>
                    </button>
                </form>
                <img class="w-full max-h-72 rounded-lg" src="{{ asset('uploads/gallerys/' . $gallary->name) }}"
                    alt="">
            </div>
        @empty
            <div>
                <div class="text-gray-800 dark:text-gray-200 text-center py-4">
                    Gallery photo not found.</div>
            </div>
        @endforelse

    </div>








    <div class="py-4">
        {{-- {{ $thumbnail->links() }} --}}
        {{ $thumbnails->links() }}
    </div>
@endsection
