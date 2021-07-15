@extends('layouts.admin')

@section('title', ' إضافة منطقة')


@section('breadcrumb')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Products</li>
</ol>
@endsection

@section('content')
    <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title-rtl">إضافة منطقة</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('area.store')}}" method="POST">
                @csrf
                @method('POST')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">إسم المنطقة </label>
                    <input type="string" class="form-control" name="name" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">إسم المنطقة بالإنجليزية</label>
                    <input type="string" class="form-control" name="english_name" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                 <div class="form-group">
                    <label for="exampleInputEmail1">شحن عادي</label>
                    <input type="string" class="form-control" name="normal_shipping" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">شحن ممتاز</label>
                    <input type="string" class="form-control" name="excellent_mail" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">شحن أطعمة</label>
                    <input type="string" class="form-control" name="food_shipping" id="exampleInputEmail1" placeholder="Enter email">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">شحن خاص </label>
                    <input type="string" class="form-control" name="special_shipping" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">طرد بريد مستعجل</label>
                    <input type="string" class="form-control" name="express_mail" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                 <div class="form-group">
                    <label for="exampleInputEmail1">شحن خارجي ممتاز</label>
                    <input type="string" class="form-control" name="Shipping_out" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">شحن خارجي ممتاز سريع</label>
                    <input type="string" class="form-control" name="fast_shipping_out" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">شحن عادي خارجي </label>
                    <input type="string" class="form-control" name="normal_shipping_outside" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">شحن بريد ممتاز خاص</label>
                    <input type="string" class="form-control" name="Special_Premium_Mail_Shipping" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                    <div class="form-group">
                        <label for="status">الحالة</label>
                        <div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="status-active" value="active">
                                <label class="form-check-label" for="status-active">
                                    فعال
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="status-draft" value="draft" >
                                <label class="form-check-label" for="status-draft">
                                    غير مفعل
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="status-draft" value="draft" >
                                <label class="form-check-label" for="status-draft">
                                    مخفي
                                </label>
                            </div>
                        </div>
                        {{-- @error('status')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror --}}
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
         </div>
@endsection