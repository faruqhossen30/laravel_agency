@extends('admin.layouts.app')
@section('breadcrumb')
<x-breadcrumb pageone="Category" pageoneRoute="{{route('category.index')}}" pagetwo="Edit"  />
@endsection
@section('content')

<div class="flex flex-col gap-6">
	<div class="card">
		<div class="card-header">
		<div class="p-6">

			<form action="{{route('category.update', $category->id)}}" method="POST">
                @csrf
                @method('PUT')
				<x-form.input label="Category Name" name="name" value="{{$category->name}}" />
				<x-form.submit-button />
		</form>
	</div>

</div>
@endsection
