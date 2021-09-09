@extends('layouts.app')
@section('content')
<div>
	<div><h1>{{ trans('title4') }}</h1></div>
	<br><br>
	@csrf
	@foreach($words as $word)
	<div class="card">
        <input type="hidden" name="id" value="{{$word->id}}">
        <div class="card-body">
        <h2 class="card-title">{{ trans('voca') }}: {{ $word->word }}</h2>
        <h3 class="card-text">{{ trans('mean') }}: {{ $word->mean}}</h3>
        <br>
        <form action="{{ route('word.learned', $word->id)}}" method="post">
        @csrf
            <button type="submit" class="btn btn-primary">{{ trans('Learn Done') }}</button>
        </form>
        </div>
	</div>
	<br>
	@endforeach
	<button class="btn btn-warning"><a href="{{ route('exam.start',$words[0]->lesson_id)}}">{{ trans('Problem solving') }}</a></button>
	<hr>
</div>
@endsection
