@extends('layouts.front')

@section('content')

<body data-spy="scroll" data-offset="70">

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
                    <h2 class="banner-title">عن الموقع</h2>
                </div><!-- END COL -->
                <div class="col-md-8">
                    <ol class="breadcrumb">
                        <li class="active"><a href="index.html">الرئيسية</a></li>
                        <li class="active">عن الموقع</li>
                    </ol>
                </div><!-- END COL -->
            </div><!-- END ROW -->
        </div><!-- END CONTAINER -->
    </section>
    <!-- END TOP BANNER AREA -->
    <!-- START HOW IT WORKS SECTION -->
    <section id="how-it-works" class="how-it-works">
        <div class="container">
            <h2>تبحث عن خدمة البريد السريع الموثوق بها في الامارات العربية المتحدة.</h2>
            <h3>نحن فى مهمة لجعل الشحن تجربة مبهجة للأفراد والشركات</h3>
            <p>ساير هو ثوره فى عالم <strong>الشحن والتسليم في الامارات العربية المتحدة</strong>مع التقنيات المتطورة. إرسال واستقبال الطرود لم يكن بهذه السهولة.</p>
            <ul style="margin-top: 30px;">
                <li style="list-style: disc; margin-bottom: 15px;">من نحن: نحن شركة خدمات بريدية مبتكرة تعتمد على التكنولوجيا ومقرها الرياض ، ونحول الطريقة التقليدية لإرسال واستقبال الطرود. نحن نعطل شركات البريد السريع من خلال القضاء على الحاجة إلى عنوان فعلي غير موجود في الأسواق الناشئة.</li>
                <li style="list-style: disc; margin-bottom: 15px;">ما الذي نفعله: نحل مشكلة عدم إمكانية توقع تسليم الطرود في الامارات العربية المتحدة بسبب عدم وجود نظام رسمي لعناوين الشوارع. نستخدم نظام تحديد المواقع العالمي (GPS) في هاتفك للاستلام والتسليم بناءً على الموقع من خلال تطبيقنا الحائز على براءة اختراع. كل ما عليك فعله هو مجرد Snap و Swipe و Ship.</li>
                <li style="list-style: disc; margin-bottom: 15px;">ما الذي يجعلنا مميزين: إن تطبيق التوصيل والتوصيل الخاص بنا يجعل حياتك أسهل ؛ من خلال بضع نقرات يمكنك حملنا على تشغيل مهامك نيابة عنك ، وبالتالي ستحصل على مزيد من الوقت في يومك للقيام بالأشياء التي تستمتع بها.</li>
                <li style="list-style: disc; margin-bottom: 15px;">أين نشحن إلى: الامارات العربية المتحدة.</li>
            </ul>
            <h3 style="margin-top: 30px;">تجنب الازعاج من الاضطرار الى توجيه سعاة</h3>
            <p>
                يساعد ساير للشحن أيضًا التجار المحليين والعلامات التجارية العالمية على بناء وإطلاق وتنمية التجارة الإلكترونية المربحة والأعمال التجارية عبر الإنترنت. نحن نحل مشكلة عدم وجود عناوين فعلية في الأسواق الناشئة ، ويلغي الحاجة إلى المكالمات الهاتفية المزعجة التي تطلب الاتجاهات
            </p>
            <p>
                لدينا حل شحن ولوجستي سهل الاستخدام حاصل على براءة اختراع: تطبيق ساير للشحن ، والذي يستخدم هاتف عميلك كموقع GPS. من خلال تطبيقنا ، يمكننا تحديد موقع العميل بالضبط ، مما يتيح لنا تسليم الحزم لهم بشكل أسرع وأكثر كفاءة من أي وقت مضى. نحن نقدم لعملائك تجربة رائعة ، ويمكنك زيادة حصتك في السوق
            </p>
        </div><!-- END CONTAINER -->
    </section>
    <!-- END HOW IT WORKS SECTION -->
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