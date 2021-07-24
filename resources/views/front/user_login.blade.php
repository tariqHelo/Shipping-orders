@extends('layouts.front')

@section('content')

    <!-- START PRELOADER -->
    
    <!-- END PRELOADER -->
    <!-- START NAVBAR -->
    @include('site.navbar')
    <!-- END NAVBAR -->
    <!-- START TOP BANNER AREA -->
    @include('site.top_banner',[
        'text' => 'سجل الإن'
    ])
    <!-- END TOP BANNER AREA -->

    <!-- START FORM REGISTER -->
    @include('site.register')
    <!-- END FORM REGISTER -->
    
    <!-- START APP DOWNLOAD SECTION -->
    @include('site.app-down')
    <!-- END APP DOWNLOAD SECTION -->
    <!-- START FOOTER AREA -->
     @include('site.footer-top')
     @include('site.footer')
    <!-- END FOOTER AREA -->


@endsection