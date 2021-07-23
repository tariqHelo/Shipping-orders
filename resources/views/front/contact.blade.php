@extends('layouts.front')

@section('content')

  <!-- START PRELOADER -->
    
    <!-- END PRELOADER -->
    <!-- START NAVBAR -->
    @include('site.navbar')
    <!-- END NAVBAR -->
    <!-- START TOP BANNER AREA -->
    <section class="top-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="banner-title">تواصل معنا</h2>
                </div><!-- END COL -->
                <div class="col-md-8">
                    <ol class="breadcrumb">
                        <li class="active"><a href="index.html">الرئيسية</a></li>
                        <li class="active">تواصل معنا</li>
                    </ol>
                </div><!-- END COL -->
            </div><!-- END ROW -->
        </div><!-- END CONTAINER -->
    </section>
    <!-- END TOP BANNER AREA -->
    <!-- START CONTACT SECTION -->
    <section id="contact" class="contact-section pt100">
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
    </section>
    <!-- END CONTACT SECTION-->
    <!-- START CONTACT SECTION -->
    <!-- END CONTACT SECTION-->
    <!-- START APP DOWNLOAD SECTION -->
    <section id="app-download" class="app-download-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>حمل البرنامج</h2>
                        <h4>قادم قريبا</h4>
                        
                    </div>
                </div><!-- END COL -->
            </div><!-- END ROW -->

            <div class="row">
                <div class="col-md-12">
                    <div class="app-download-content">
                        <!-- START APP STORE -->
                        <a href="#" class="download-btn">
                            <i class="icofont icofont-brand-apple"></i>
                            <span>
                                متاح على
                                <span class="large-text">متجر التطبيقات</span>
                            </span>
                        </a>
                        <!-- END APP STORE -->
                        <!-- START PLAY STORE -->
                        <a href="#" class="download-btn">
                            <i class="icofont icofont-brand-android-robot"></i>
                            <span>
                                متاح على
                                <span class="large-text">متجر التطبيقات</span>
                            </span>
                        </a>
                        <!-- END PLAY STORE -->
                    </div>
                </div><!-- END COL -->
            </div><!-- END ROW -->
        </div><!-- END CONTAINER -->
    </section>
    <!-- END APP DOWNLOAD SECTION -->
    <!-- START FOOTER AREA -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="subscribe-text">
                            <h3>اشترك في النشرة الإخبارية لدينا</h3>
                            
                        </div>

                        <div class="subscribe-form">
                            <form>
                                <input type="email" class="form-control" id="subscribe_email" name="email" placeholder="أدخل عنوان بريدك الالكتروني..." required>
                                <button type="submit" class="btn subscribe-btn"><i class="icofont icofont-fast-delivery"></i></button>
                            </form>
                        </div>
                    </div><!-- END COL -->
                </div><!-- END ROW -->
            </div><!-- END CONTAINER -->
        </div><!-- END FOOTER TOP -->

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <p>   صمم  بسعاده من قبل 😉 </i>  ساير للشحن  </p>
                    </div>
                    <div class="col-sm-6 col-md-6">

                        <ul class="social-links">
                            <li>تابعنا :</li>
                            <li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
                            <li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
                            <li><a href="#"><i class="icofont icofont-social-google-plus"></i></a></li>
                            <li><a href="#"><i class="icofont icofont-brand-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div><!-- END ROW -->
            </div><!-- END CONTAINER -->
        </div><!-- END FOOTER BOTTOM -->
    </footer>
    <!-- END FOOTER AREA -->


@endsection