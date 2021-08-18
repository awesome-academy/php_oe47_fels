@extends('layouts.app')
@section('content')
<div class="banner_section layout_padding">
         <div id="my_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="banner_taital_main">
                        <div class="row">
                           <div class="col-md-6">
                              <h1 class="banner_taital">{{ trans('Framgia E-learning System') }}</h1>
                              <p class="banner_text">English vocabulary learning system by topic.</p>
                              <div class="btn_main">
                                 <div class="about_bt active"><a href="#">{{ trans('Word list') }}</a></div>
                                 <div class="quote_bt"><a href="#">{{ trans('Start Lesson') }}</a></div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="image_1"><img src="{{ asset('assets/image/img-1.png') }}"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="banner_taital_main">
                        <div class="row">
                           <div class="col-md-6">
                              <h1 class="banner_taital">{{ trans('Framgia E-learning System') }}</h1>
                              <p class="banner_text">{{ trans('English vocabulary learning system by topic.') }}</p>
                              <div class="btn_main">
                                 <div class="about_bt active"><a href="#">{{ trans('Word list') }}</a></div>
                                 <div class="quote_bt"><a href="#">{{ trans('Start Lesson') }}</a></div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="image_1"><img src="{{ asset('assets/image/img-1.png') }}"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="banner_taital_main">
                        <div class="row">
                           <div class="col-md-6">
                              <h1 class="banner_taital">{{ trans('Framgia E-learning System') }}</h1>
                              <p class="banner_text">{{ trans('English vocabulary learning system by topic.') }}</p>
                              <div class="btn_main">
                                 <div class="about_bt active"><a href="#">{{ trans('Word list') }}</a></div>
                                 <div class="quote_bt"><a href="#">{{ trans('Start Lesson') }}</a></div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="image_1"><img src="{{ asset('assets/image/img-1.png') }}"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
            <i class="fa fa-arrow-left" style="font-size:24px"></i>
            </a>
            <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
            <i class="fa fa-arrow-right" style="font-size:24px"></i>
            </a>
         </div>
      </div>
      <!--banner section end -->
      </div>
      <!--header section end -->
      <!-- about section start -->
      <div class="news_section layout_padding">
         <div class="container">
            <h1 class="news_taital">{{ trans('Our About') }}</h1>
            <p class="news_text">{{ trans('title')}}</p>
            <div class="news_section_2">
               <div class="row">
                  <div class="col-md-6">
                     <div class="news_taital_box">
                        <p class="date_text">{{ trans('01 Jan 2020') }}</p>
                        <h4 class="make_text">{{ trans('2018 BEST English e-learning system') }}</h4>
                        <p class="lorem_text">{{ trans('title') }}</p>
                        <p class="lorem_text">{{ trans('title2') }}</p>
                        <p class="post_text">{{ trans('Post By : Framgia') }}</p>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <img src="{{ asset('assets/image/img-6.png') }}" class="image_6" style="width:100%">
                     <h6 class="plus_text">+</h6>
                  </div>
               </div>
            </div>
            <div class="read_bt"><a href="#">{{ trans('Read More') }}</a></div>
         </div>
      </div>
@endsection