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
                <form action="{{ route('register') }}" class="register-form" method="POST" enctype="multipart/form-data">
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
                    <label class="control-label visible-ie8 visible-ie9">الإيميل</label>
                    <input class="form-control placeholder-no-fix"  name="email"  type="text" placeholder="الإيميل"/>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">رقم الهاتف</label>
                    <input class="form-control placeholder-no-fix"  name="phone" type="text" placeholder="المتجر" />
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">رقم الهاتف الثاني</label>
                    <input class="form-control placeholder-no-fix"  name="phone2"  type="text" placeholder="الإيميل"/>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">شعار متجر</label>
                    <input  class="form-control placeholder-no-fix"  name="logo" type="file" placeholder="المتجر" />
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">الدولة</label>
                     <select name="country_id" id="country_id" class="form-control">
                        <option value=""> --- </option>
                        @foreach($countries as $country)
                            <option value="{{ $country->id }}" {{ old('country_id') == $country->id ? 'selected' : '' }}>{{ $country->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">المدينة</label>
                      <div class="form-group">
                        <select name="city_id" id="city_id" class="form-control">
                        </select>
                        @error('city_id')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">المنطقة</label>
                    <div class="form-group">
                        <select name="area_id" id="area_id" class="form-control">
                        </select>
                        @error('area_id')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9"> عمولة التعامل</label>
                    <input class="form-control placeholder-no-fix" name="commission" type="text" placeholder="إسم المستخدم"  />
                 </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9"> طريقة إستلام المبالغ</label>
                    <select name="method" class="form-control">
                        <option value="">---</option>
                        <option value="bank">bank</option>
                        <option value="monetary">monetary</option>
                    </select>
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