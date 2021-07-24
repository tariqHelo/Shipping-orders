@extends('layouts.front')

@section('content')

<body data-spy="scroll" data-offset="70">

    <!-- START PRELOADER -->
    
    <!-- END PRELOADER -->
    <!-- START NAVBAR -->
    @include('site.navbar')
    <!-- END NAVBAR -->
    <!-- START TOP BANNER AREA -->
      @include('site.top_banner',[
        'text' => 'عن الموقع'
    ])
    <!-- END TOP BANNER AREA -->
    <!-- START HOW IT WORKS SECTION -->
    @include('site.how-it-works1')
    <!-- END HOW IT WORKS SECTION -->
    <!-- START APP DOWNLOAD SECTION -->
    @include('site.app-down')
    <!-- END APP DOWNLOAD SECTION -->
    <!-- START FOOTER AREA -->
    @include('site.footer-top')
    @include('site.footer')
    <!-- END FOOTER AREA -->
@endsection