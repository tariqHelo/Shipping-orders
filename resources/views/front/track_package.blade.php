@extends('layouts.front')

@section('content')

    <!-- START PRELOADER -->
    
    <!-- END PRELOADER -->
    <!-- START NAVBAR -->
    @include('site.navbar')
    <!-- END NAVBAR -->
    <!-- START TOP BANNER AREA -->
    @include('site.top_banner',[
        'text' => 'تتبع شحنتك'
    ])
    <!-- END TOP BANNER AREA -->
    @include('site.track')
    <!-- START APP DOWNLOAD SECTION -->
    @include('site.app-down')
    <!-- END APP DOWNLOAD SECTION -->
    <!-- START FOOTER AREA -->
     @include('site.footer-top')
     @include('site.footer')
    <!-- END FOOTER AREA -->


@endsection