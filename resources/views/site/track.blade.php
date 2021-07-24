
<style>
    #map {
        height: 435px;
        width: 100%;
    }
</style>
<section id="track" class="contact-section pt100">
    <!-- Start CONTAINER -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title mb50">
                        <h2>تتبع شحنتك</h2>
                        <p>من فضلك ادخل رقم التتبع </p>
                    </div>
                </div><!-- END COL -->
            </div><!-- END ROW -->

            <div class="row">
                <div class="col-sm-6 col-md-6 col-md-offset-3">
                    <div class="contact-form">
                        <form id="contatc_form" action="#" name="myform">
                            <div class="minput">
                                <div class="group">
                                    <input type="text" id="DRTrackoingNO" placeholder="من فضلك ادخل رقم التتبع #" required>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    
                                </div>
                            </div>
                            

                            <div class="text-center">
                                <button type="button" onclick="submitData()" class="default-button">تتبع الان</button>
                            </div>
                        </form>
                    </div>
                </div><!-- END COL -->
            </div>
            <link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />

            <div class="row" style="margin-top: 30px;">
                <div id="_PartialTrackPackage" style="display:none" class="col-sm-12 col-md-12">
                    <!-- Bootstrap -->
    <link href="../css/bootstrap_ar.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/style_ar.css" rel="stylesheet">
            <div class="row">
                <li class="list-group-item text-center" style="color:red;"><b>رقم تتبع غير صحيح</b></li>
            </div>

                </div>
                <div class="col-md-6 col-md-offset-3 Invalidtrack_details" style="display:none;">
                    <ul class="list-group">
                        <li class="list-group-item text-center" style="color:red;"><b>رقم تتبع غير صحيح</b></li>
                    </ul>
                </div>
            </div>
        </div>
    <!-- END CONTAINER -->
</section>

<script>
    function submitData() {
        debugger;
        var TrackingNo = $("#DRTrackoingNO").val();
        //$("#_PartialTrackPackage").load("/HomeSite/_PartialTrackPackage?TrackID=" + TrackingNo)
        //$("#_PartialTrackPackage").slideDown();
        location.href = "https://ساير للشحن.com/HomeSite/TRACEPackage?trackingnumber=" + TrackingNo;
    }

    function IsEmptyORNull(value) {
        return (typeof value === "undefined" || value === null || value == "");
    }

    function formatAMPM(_h, _m) {
        var ampm = _h >= 12 ? 'PM' : 'AM';
        hours = _h % 12;
        hours = _h ? _h : 12; // the hour '0' should be '12'
        minutes = _m < 10 ? '0' + _m : _m;
        var strTime = _h + ':' + _m + ' ' + ampm;
        return strTime;
    }
    function ConvertDate(date) {
        var Dated = new Date(date.split("../index.html").reverse().join("-"));
        var day = ("0" + (Dated.getDate())).slice(-2);
        var month = ("0" + (Dated.getMonth() + 1)).slice(-2);
        var year = Dated.getFullYear();
        return newdate = day + "-" + month + "-" + year;
    }
</script>
