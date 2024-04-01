@extends('admin.layouts.app')
@section('breadcrumb')
<x-breadcrumb pageone="Gallery Category" pageoneRoute="{{route('gallery-category.index')}}" pagetwo="Edit"  />
@endsection
@section('content')

<div class="flex flex-col gap-6">
	<div class="card">
		<div class="card-header">
		<div class="p-6">

			<form action="{{route('gallery-category.update', $gallerycategory->id)}}" method="POST">
                @csrf
                @method('PUT')
				<x-form.input label="Category Name" name="name" value="{{$gallerycategory->name}}" />
				<x-form.submit-button />
		</form>
	</div>

</div>
@endsection
