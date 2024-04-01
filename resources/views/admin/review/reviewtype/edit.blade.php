@extends('admin.layouts.app')
@section('breadcrumb')
    <x-breadcrumb pageone="ReviewType" pageoneRoute="{{ route('reviewtype.index') }}" pagetwo="Create" />
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
                <form action="{{ route('reviewtype.update',$type->id) }}" method="POST" enctype="multipart/form-data" class=" space-y-1">
                    @csrf
                    @method('PUT')
                    <x-form.input label="Title" name="name" value="{{$type->name}}" />
                    <x-form.submit-button  title="Update"/>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection




