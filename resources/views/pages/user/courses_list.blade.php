@extends('layouts.app')
@section('content')
<div>
<div class="services_section layout_padding">
         <div class="container">
            <h1 class="services_taital"><span>{{ trans('Our_Courses') }}</span></h1>
            <div class="services_section_2">
               <div class="row">
                  @foreach( $courses as $course)
                     <div class="col-md-6">
                        <a href="{{ route('lesson.list', $course->id) }}">
                        <div class="image_main">
                           <img src="{{ $course->image->url }}" class="image_8">
                           <div class="text_main">
                              <div class="seemore_text">{{ $course->name}}</div>
                           </div>
                        </div></a>
                     </div>
                  @endforeach
               </div>
            </div>
            <hr>
         </div>            
      </div>
   </div>
@endsection