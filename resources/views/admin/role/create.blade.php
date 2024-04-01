@extends('admin.layouts.app')
@section('breadcrumb')
    <x-breadcrumb pageone="Role" pageoneRoute="{{route('role.index')}}" pagetwo="Create" />
@endsection
@section('content')
    <div class="flex flex-col gap-6">
        <div class="card">
            <div class="card-header">
                <div class="p-6">

                    <form action="{{ route('role.store') }}" method="POST">
                        @csrf
                        <x-form.input name="name" label="Name" />
                        <div class="grid grid-cols-12 gap-5 py-2">
                            @foreach ($permissions as $group => $permission)
                                <div class="col-span-4">
                                    <div
                                        class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                                        <div class="px-4 md:px-5 py-5">
                                            <div class="">
                                                <h3 class="text-lg font-normal text-gray-800 capitalize dark:text-gray-200">
                                                    {{$group}}
                                                </h3>
                                            </div>
                                            <div class="space-y-2 py-2">
                                                @foreach ($permission as $key => $value)
                                                    <x-form.inputcheckbox title="{{$value->name}}" id="{{$value->id}}" />
                                                @endforeach


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                        <x-form.submit-button />

                    </form>
                </div>

            </div>
        @endsection
