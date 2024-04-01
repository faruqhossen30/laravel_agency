@extends('admin.layouts.app')
@section('breadcrumb')
    <x-breadcrumb />
@endsection
@section('content')
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 items-center gap-2 md:gap-6">
        <x-dashboard.dahsbordcard />
        <x-dashboard.dahsbordcard />
        <x-dashboard.dahsbordcard />
        <x-dashboard.dahsbordcard />
        <x-dashboard.dahsbordcard />
    </div>
@endsection
