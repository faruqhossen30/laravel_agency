@extends('admin.layouts.app')
@section('breadcrumb')
<x-breadcrumb pageone="Gallery Category" pageoneRoute="{{route('gallery-category.index')}}" pagetwo="Create"  />
@endsection
@section('content')
<div class="flex flex-col gap-6 ">
	<div class="card">
		<div class="card-header">
		<div class="p-6">

			<form action="{{route('gallery-category.store')}}" method="POST">
                @csrf
				<x-form.input label="Category Name" name="name" />
				<x-form.submit-button />
		</form>
	</div>
</div>
@endsection
