@extends('admin.layouts.app')
@section('breadcrumb')
<x-breadcrumb pageone="Software" pageoneRoute="{{route('software.index')}}" pagetwo="Edit"  />
@endsection
@section('content')

<div class="flex flex-col gap-6">
	<div class="card">
		<div class="card-header">
		<div class="p-6">

			<form action="{{route('software.update', $software->id)}}" method="POST">
                @csrf
                @method('PUT')
				<x-form.input label="Software Name" name="name" value="{{$software->name}}" />
				<x-form.submit-button />
		</form>
	</div>

</div>
@endsection
