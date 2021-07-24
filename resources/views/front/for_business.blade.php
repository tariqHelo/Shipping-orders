@extends('layouts.front')

@section('content')
 <!-- START PRELOADER -->
    
    <!-- END PRELOADER -->
  <!-- START NAVBAR -->
    @include('site.navbar')
    <!-- END NAVBAR -->
    <!-- START TOP BANNER AREA -->
      @include('site.top_banner',[
        'text' => 'للإعمال'
    ])
    <!-- END TOP BANNER AREA -->
    @include('site.script')

    <!-- START HOW IT WORKS SECTION -->
    @include('site.how-it-works2')
    <!-- END HOW IT WORKS SECTION -->
    <!-- TEMPLATE FEATURES -->
    @include('site.template-features')
    <!-- END TEMPLATE FEATURES -->
    <!-- START APP ABOUT SECTION -->
    @include('site.about-section')
    <!-- END APP ABOUT SECTION -->
    <!-- START APP DOWNLOAD SECTION -->
    @include('site.app-down')
    <!-- END APP DOWNLOAD SECTION -->
    <!-- START FOOTER AREA -->
    @include('site.footer-top')
    @include('site.footer')
    <!-- END FOOTER AREA -->



@endsection