<!--header section start -->
<div class="header_section">
    <div class="header_bg">
       <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
             <a class="logo" href="index.html"><img src="{{ asset('assets/image/logo1.png') }}"></a>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                   <li class="nav-item active">
                      <a class="nav-link" href="{{ route('home') }}">{{ trans('Home')}}</a>
                   </li>
                   <li class="nav-item">
                      <a class="nav-link" href="about.html">{{ trans('About')}}</a>
                   </li>
                   <li class="nav-item">
                      <a class="nav-link" href="{{ route('course') }}">{{ trans('Courses')}}</a>
                   </li>
                   <li class="nav-item">
                      <a class="nav-link" href="blog.html">{{ trans('Blog')}}</a>
                   </li>
                   <li class="nav-item">
                      <a class="nav-link" href="contact.html">{{ trans('Contact Us')}}</a>
                   </li>
                </ul>
                <div class="call_section">
                   <ul>
                      <li><a href="{{route('change-language',['en'])}}"><img src="{{ asset('assets/image/en.png') }}"></a></li>
                      <li><a href="{{route('change-language',['vi'])}}"><img src="{{ asset('assets/image/vn.png') }}"></a></li>
                   </ul>
                   <ul>
                     @if(Auth::check())
                     <li><a class="btn_login " href="{{route('logout')}}">LOG OUT</a></li>
                     @else
                     <li><a class="btn_login " href="{{route('login.create')}}">LOG IN</a></li>
                     @endif
                  </ul>
                </div>
             </div>
          </nav>
       </div>
    </div>
 </div>
 