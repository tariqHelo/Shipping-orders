@extends('layouts.front')

@section('content')

  <!-- START PRELOADER -->
    
    <!-- END PRELOADER -->
    <!-- START NAVBAR -->
    @include('site.navbar')
    <!-- END NAVBAR -->
    <!-- START TOP BANNER AREA -->
     @include('site.top_banner',[
        'text' => 'تواصل معنا'
    ])
    <!-- END TOP BANNER AREA -->
    <!-- START CONTACT SECTION -->
    {{-- <section id="contact" class="contact-section pt100">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-4">
                    <div class="contact-info">
                        <div class="contact_country_img saudi_img">
                            <h2>الامارات</h2>
                        </div>
                        <ul>
                            <li>
                                <h3><i class="icofont icofont-social-google-map"></i> عنوان المكتب:</h3>
                                <p>
                                    شارع الحصن ، فلج المعلأ، أم القيوين، الامارات العربية المتحدة
                                </p>

                                <br>
                                <h3><i class="icofont icofont-envelope"></i>&nbsp; البريد الالكترونى :</h3>
                                <p>contact@sayer.ae</p>

                                <br>
                                <h3><i class="icofont icofont-phone"></i>للتواصل:</h3>
                                <p>061234567</p>
                                <p>0566613070</p>

                            </li>
                        </ul>
                    </div>
                </div><!-- END COL -->

            </div><!-- END ROW -->
        </div><!-- END CONTAINER -->
    </section> --}}
    @include('site.contact')
    <!-- END CONTACT SECTION-->
    <!-- START CONTACT SECTION -->
    <!-- END CONTACT SECTION-->
    <!-- START APP DOWNLOAD SECTION -->
    @include('site.app-down')
    <!-- END APP DOWNLOAD SECTION -->
    <!-- START FOOTER AREA -->
    @include('site.footer-top')
    @include('site.footer')
    <!-- END FOOTER AREA -->


@endsection