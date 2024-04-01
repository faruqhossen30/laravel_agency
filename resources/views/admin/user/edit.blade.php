@extends('admin.layouts.app')
@section('breadcrumb')
    <x-breadcrumb pageone="Admin" pageoneRoute="{{ route('admin.index') }}" pagetwo="Edit" />
@endsection
@section('content')
    <div class="flex flex-col gap-6">
        <div class="card">
            <div class="card-header">
                <div class="p-6">

                    <form action="{{ route('admin.update', $admin->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <x-form.input name="name" label="Name" value="{{ $admin->name }}" />
                        <x-form.input name="email" label="Email" value="{{ $admin->email }}" />

                        <div class="py-1">
                            <label for="role_ids" class="text-gray-500 dark:text-gray-500">Role</label>
                            <select name="role_ids[]" id="role_ids" multiple
                                class="js-example-basic-multiple py-2 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                                required>
                                <option value="">Select</option>
                                @foreach ($roles as $item)
                                    <option value="{{ $item->id }}"
                                        {{ $admin->hasRole($item->name) ? 'selected' : '' }}>
                                        {{ $item->name }}</option>
                                @endforeach
                            </select>
                            @error('{{ $role_ids }}')
                                <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <x-form.input name="password" label="Password" />
                        <x-form.input name="password_confirmation" label="Confirm Password" type="password" />
                        <x-form.submit-button />
                    </form>
                </div>

            </div>
        @endsection
        @push('styles')
            <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        @endpush

        @push('scripts')
            <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
            <script>
                $(document).ready(function() {
                    $('.js-example-basic-multiple').select2();
                });
            </script>
        @endpush
