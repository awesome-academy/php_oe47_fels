@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>{{ trans('List of Exam') }}</h2><br>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>{{ trans('Number') }}</th>
                            <th> {{ trans('Exam Title') }} </th>
                            <th> {{ trans('Exam Time') }} </th>
                            <th> {{ trans('Total Question') }} </th>
                            <th>{{ trans('Action') }} </th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($quizes as $key=>$quz)       
                        <tr>
                            <td> {{++$key}} </td>
                            <td> {{$quz->quiz_name}}</td>
                            <td> {{$quz->quiz_time}}</td>
                            <td> {{$quz->number_of_question}}</td>
                            <td><button class="btn btn-success"><a href="{{ route('exam.start',$quz->id) }}">{{ trans('Start Exam') }}</a></button> </td>
                        </tr>                 
                    @endforeach     
                    </tbody>
                </table>
            </div>
            {{$quizes->links()}}  
        </div>
    </div>
</div>
@endsection
