<section id="register" class="contact-section pt100">
    <!-- Start CONTAINER -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title mb50">
                        <h2>سجل بيانتك </h2>
                        <p>من فضلك ادخل بيانتك بشكل صحيح </p>
                    </div>
                </div><!-- END COL -->
            </div><!-- END ROW -->

            <div class="row">
                <div class="col-sm-6 col-md-6 col-md-offset-3">
                     <form class="register-form" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">إسم التاجر</label>
                    <input class="form-control placeholder-no-fix" name="name" type="text" placeholder="إسم المستخدم"  />
                 </div>
                 <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">إسم المتجر</label>
                    <input class="form-control placeholder-no-fix"  name="store" type="text" placeholder="المتجر" />
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">شعار متجر</label>
                    <input class="form-control placeholder-no-fix"  name="store" type="text" placeholder="المتجر" />
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">الدولة</label>
                    <select class="form-control">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">المدينة</label>
                    <select class="form-control">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">المنطقة</label>
                    <select class="form-control">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">الإيميل</label>
                    <input class="form-control placeholder-no-fix"  name="email"  type="text" placeholder="الإيميل"/>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">رقم الهاتف</label>
                    <input class="form-control placeholder-no-fix"  name="store" type="text" placeholder="المتجر" />
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">رقم الهاتف الثاني</label>
                    <input class="form-control placeholder-no-fix"  name="email"  type="text" placeholder="الإيميل"/>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9"> عمولة التعامل</label>
                    <input class="form-control placeholder-no-fix" name="name" type="text" placeholder="إسم المستخدم"  />
                 </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9"> طريقة إستلام المبالغ</label>
                    <input class="form-control placeholder-no-fix"  name="store" type="text" placeholder="المتجر" />
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">كلمة السر</label>
                    <input class="form-control placeholder-no-fix"  name="password" type="password" autocomplete="off"  placeholder="كلمة السر" />
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">تأكيد كلمة السر</label>
                    <input class="form-control placeholder-no-fix" name="password_confirmation" type="password" autocomplete="off" placeholder="تأكيد كلمة السر"  />
                </div>

                 <div class="text-center">
                    <button type="submit"  class="default-button">تسجيل</button>
                </div>
                </form>
            </div>
            
    <!-- END CONTAINER -->
</section>