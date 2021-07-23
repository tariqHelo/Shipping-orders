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
                    <h2 class="banner-title">ماذا يجب أن تعرف؟</h2>
                </div><!-- END COL -->
                <div class="col-md-8">
                    <ol class="breadcrumb">
                        <li class="active"><a href="index.html">الرئيسية</a></li>
                        <li class="active">أعرف أكثر</li>
                    </ol>
                </div><!-- END COL -->
            </div><!-- END ROW -->
        </div><!-- END CONTAINER -->
    </section>
    <!-- END TOP BANNER AREA -->

    <section id="app-download" class="app-download-section signup_login_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <img src="../images/icon_for_drivers.svg" />
                        
                    </div>
                </div><!-- END COL -->
            </div><!-- END ROW -->

            <!-- START HOW IT WORKS SECTION -->
            <section id="how-it-works" ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2 style="color:#000";>الأسعار</h2>
                            </div>
                        </div><!-- END COL -->
                    </div><!-- END ROW -->
                    
                    
                    
                    
                                <!-- END PLAY STORE -->
                            </div>
                        </div><!-- END COL -->
                    </div><!-- END ROW -->
                </div><!-- END CONTAINER -->
            </section>

            <!-- START HOW IT WORKS SECTION -->
            <section id="how-it-works" class="how-it-works angle-gray-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2>ما لا يمكن أرساله</h2>
                            </div>
                        </div><!-- END COL -->
                    </div><!-- END ROW -->

                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <div class="single-feature">
                                <div class="feature-icon">
                                    <i class="icofont icofont-cur-dollar"></i>
                                </div>
                                <h4> فوائد ماليه</h4>
                                <p>
                                    من خلال الانضمام كقبطان في فريقنا ، ستزيد دخلك حيث تشعر حقًا بالتغيير
                                </p>
                            </div>
                        </div><!-- END COL -->

                        <div class="col-sm-6 col-md-4">
                            <div class="single-feature">
                                <div class="feature-icon">
                                    <i class="icofont icofont-time"></i>
                                </div>
                                <h4> التشغيل الآلي</h4>
                                <p>
                                    من خلال الأتمتة لدينا ، نحن نضمن تعيين الحد الأدنى من المهام مع أقصى عوائد للنقباء لدينا ، ونحن نقدر وقت رعايتنا.
                                </p>
                            </div>
                        </div><!-- END COL -->

                    </div><!-- END ROW -->
                </div><!-- END CONTAINER -->
            </section>
            <!-- END HOW IT WORKS SECTION -->
            <!-- TEMPLATE FEATURES -->
            <!-- END TEMPLATE FEATURES -->



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
    </section>
@endsection