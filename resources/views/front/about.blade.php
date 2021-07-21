@extends('layouts.front')

@section('content')

 <!-- START PRELOADER -->
    
    <!-- END PRELOADER -->
    <!-- START NAVBAR -->
    @include('layouts.navbar')
    <!-- END NAVBAR -->
    <!-- START TOP BANNER AREA -->
    @include('site.top_banner')
    <!-- END TOP BANNER AREA -->


    



    <!-- START HOW IT WORKS SECTION -->
    @include('site.how-it-works')
    <!-- END HOW IT WORKS SECTION -->



    <!-- START APP DOWNLOAD SECTION -->
    @include('site.download')
    <!-- END APP DOWNLOAD SECTION -->
    <!-- START FOOTER AREA -->
    @include('site.footer')
    <!-- END FOOTER AREA -->
@endsection