@extends('layouts.front')

@section('content')

  <!-- START PRELOADER -->
    
    <!-- END PRELOADER -->
  <!-- START NAVBAR -->
    @include('site.navbar')
    <!-- END NAVBAR -->
    <!-- START TOP BANNER AREA -->
      @include('site.top_banner',[
        'text' => 'ماذا يجب أن تعرف؟'
    ])
    <!-- END TOP BANNER AREA -->

    <section id="app-download" class="app-download-section signup_login_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <img src="{{ asset('assets/admin/images/icon_for_drivers.svg')}}" />
                        
                    </div>
                </div><!-- END COL -->
            </div><!-- END ROW -->

            <!-- START HOW IT WORKS SECTION -->
            @include('site.how-it-works3')

            <!-- START HOW IT WORKS SECTION -->
            @include('site.how-it-works4')

            <!-- END HOW IT WORKS SECTION -->
            <!-- TEMPLATE FEATURES -->
            <!-- END TEMPLATE FEATURES -->



            <!-- START APP DOWNLOAD SECTION -->
           @include('site.app-down')
            <!-- END APP DOWNLOAD SECTION -->
            <!-- START FOOTER AREA -->
            @include('site.footer-top')
            @include('site.footer')
            <!-- END FOOTER AREA -->
    </section>
@endsection