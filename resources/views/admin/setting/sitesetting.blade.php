@extends('admin.layouts.app')
@section('breadcrumb')
    <div class="flex justify-between">
        <x-breadcrumb pageone="Settingpage" />
        <x-button.button-plus route="{{ route('settingpage') }}" title="Create Settingpage" />
    </div>
@endsection
