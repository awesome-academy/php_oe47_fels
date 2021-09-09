@extends('layouts.app')
@section('content')
<div class="container">
	<h1>{{ trans('Myprofile') }}</h1>
	<div class="container">
		@foreach($datas as $data)
		<div class="col-md-6">
			<span>{{ trans('Name') }}: {{ $data->name }}</span>
			<br>
			<span>{{ trans('Email') }}: {{ $data->email }}</span>
			<br>
			<span>{{ trans('Avatar') }}: <img src=""></span>
		</div>
		@endforeach
	</div>
</div>
@endsection
