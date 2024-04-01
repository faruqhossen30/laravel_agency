@extends('admin.layouts.app')
@section('breadcrumb')
    <x-breadcrumb pageone="Blog" pageoneRoute="" pagetwo="Edit" />
@endsection
@section('content')
    <div class="flex flex-col gap-6">
        <div class="card">
            <div class="card-header">
                <div class="p-6">

                    <form action="{{ route('role.update', $role) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <x-form.input name="name" label="Name" value="{{ $role->name }}" />

                        <div class="grid grid-cols-12 gap-5">
                            @foreach ($permissions as $group => $permission)
                                <div class="col-span-4">
                                    <div
                                        class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-200 dark:shadow-slate-700/[.7]">
                                        <div class="px-4 md:px-5 py-5">
                                            <div class="">
                                                <h3 class="text-lg font-normal text-gray-800 capitalize dark:text-gray-200">
                                                    {{$group}}
                                                </h3>
                                            </div>
                                            <div class="space-y-2 py-2">
                                                @foreach ($permission as $key => $value)
                                                    <x-form.inputcheckbox title="{{ $value->name }}"
                                                        id="{{ $value->id }}" :array="$rolePermissions" />
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                        <x-form.submit-button title="Update" />

                    </form>
                </div>

            </div>
        @endsection
