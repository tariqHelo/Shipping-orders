@extends('layouts.admin')

@section('title', '')


@section('breadcrumb')
{{-- <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Country</li>
</ol> --}}
@endsection


@section('content')

<div class="col-md-12">

              @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach($errors->all() as $message)
                      <li>{{ $message }}</li>
                      @endforeach
                  </ul>
              </div>
              @endif
            <!-- general form elements -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title-rtl">إضافة بيانات الطلب</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="" method="POST">
                @csrf
                <div class="card-body">
                    <div class="row">
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label class="control-label">رقم الطلب</label>
                                  <input type="text" id="firstName" class="form-control" placeholder="Chee Kin">
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label class="control-label">رقم الطلب</label>
                                  <input type="text" id="firstName" class="form-control" placeholder="Chee Kin">
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label class="control-label">رقم التتبع</label>
                                  <input type="text" id="firstName" class="form-control" placeholder="Chee Kin">
                                </div>
                              </div>

                    </div>
                    {{-- <div class="row">
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label class="control-label">رقم الطلب</label>
                                  <input type="text" id="firstName" class="form-control" placeholder="Chee Kin">
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label class="control-label">رقم الطلب</label>
                                  <input type="text" id="firstName" class="form-control" placeholder="Chee Kin">
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label class="control-label">رقم التتبع</label>
                                  <input type="text" id="firstName" class="form-control" placeholder="Chee Kin">
                                </div>
                              </div>

                    </div> --}}
                     <div class="form-group">
                        <label>تاريخ الإستلام </label>
                          <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                          </div>
                          <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                    </div>
                    <div class="form-group">
                      <label>نوع المرسل</label>
                      <select class="form-control">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                      </select>
                    </div>
                   
                    <div class="form-group">
                      <label for="exampleInputEmail1">إسم المستلم</label>
                      <input type="string" class="form-control @error('english_name') is-invalid @enderror" name="english_name" id="exampleInputEmail1" placeholder="إسم البلد بالإنجليزية">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">رقم الهاتف</label>
                      <input type="string" class="form-control @error('english_name') is-invalid @enderror" name="english_name" id="exampleInputEmail1" placeholder="إسم البلد بالإنجليزية">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">رقم الهاتف أخر</label>
                      <input type="string" class="form-control @error('english_name') is-invalid @enderror" name="english_name" id="exampleInputEmail1" placeholder="إسم البلد بالإنجليزية">
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                              <label>الدولة</label>
                              <select class="form-control">
                                <option>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                              </select>
                          </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                              <label>المدينة</label>
                              <select class="form-control">
                                <option>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                              </select>
                          </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                              <label>المنطقة</label>
                              <select class="form-control">
                                <option>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                              </select>
                          </div>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">العنوان بالكامل</label>
                      <input type="string" class="form-control @error('english_name') is-invalid @enderror" name="english_name" id="exampleInputEmail1" placeholder="إسم البلد بالإنجليزية">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">رقم المنزل</label>
                      <input type="string" class="form-control @error('english_name') is-invalid @enderror" name="english_name" id="exampleInputEmail1" placeholder="إسم البلد بالإنجليزية">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">عدد الأكياس أو العلب</label>
                      <input type="string" class="form-control @error('english_name') is-invalid @enderror" name="english_name" id="exampleInputEmail1" placeholder="إسم البلد بالإنجليزية">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">مواد الشحنة</label>
                      <input type="string" class="form-control @error('english_name') is-invalid @enderror" name="english_name" id="exampleInputEmail1" placeholder="إسم البلد بالإنجليزية">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">إجمالي الوزن بالكيلو </label>
                      <input type="string" class="form-control @error('english_name') is-invalid @enderror" name="english_name" id="exampleInputEmail1" placeholder="إسم البلد بالإنجليزية">
                    </div>
                    <div class="form-group">
                      <label>نوع الخدمة</label>
                      <select class="form-control">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                      </select>
                    </div>
                     <div class="form-group">
                      <label for="exampleInputEmail1">رسوم الشحن </label>
                      <input type="string" class="form-control @error('english_name') is-invalid @enderror" name="english_name" id="exampleInputEmail1" placeholder="إسم البلد بالإنجليزية">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">مبلغ الطلبية بدون رسوم الشحن </label>
                      <input type="string" class="form-control @error('english_name') is-invalid @enderror" name="english_name" id="exampleInputEmail1" placeholder="إسم البلد بالإنجليزية">
                    </div>
                    <div class="form-group">
                      <label>مبلغ الشحن على </label>
                      <select class="form-control">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                      </select>
                    </div>
                    <div class="form-group">
                        <label>Text</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>
                    <div class="form-group">
                        <label>Textarea</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                      </div>
                    </div>
                      
                    
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">إضافة</button>
                  <a href="{{route('order.index')}}" class="btn btn-danger" type="button"> إلغاء</a>
                </div>
              </form>
            </div>
            <!-- /.card -->
         </div>
@endsection