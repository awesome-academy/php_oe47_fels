@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        @if($questions->count()>0)
            <p>{{ trans('Exam Time') }} &nbsp; <span class="js-timeout">{{$quiz->quiz_time}}</span></p>
            <div class="icon-bar" >
                <button class="btn btn-lg">{{ trans('Exam Time CountDown') }}<span class="js-timeout"></span></button>
            </div>
            <form action="{{ route('exams') }}" method="POST" name="exam">
                {{csrf_field()}}
                <div class="col-md-12">
                    @foreach($questions as $key=>$ques)
                        <input type="hidden" name="questions_id{{$key+1}}" value="{{$ques->id}}">
                        <input type="hidden" name="ans{{$key+1}}" value="0">
                        <h5 > {{$key+1}}. {{$ques->question}}</h5>
                        <ol class="ul-list">
                        @foreach($ques->optionsdata as $opt)
                            <li><input type="radio" name="ans{{$key+1}}" value="{{$opt->option}}" /> {{$opt->option}}</li>
                        @endforeach
                        </ol>
                    @endforeach
                    <input type="hidden" name="index" value="<?php echo $key+1 ?>">
                    <input type="hidden" name="quizes_id" value="{{$quiz->id}}">
                </div>
                <input type="submit" class="btn btn-sm" value="submit">
            </form>
            @else
            <h2>{{ trans('Opps! No Data Found') }}</h2>
        @endif
    </div>
</div>
@endsection
