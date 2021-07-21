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
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title-rtl">إضافة مدينة</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
               <form role="form" action="{{route('area.store')}}" method="POST">
               
                  <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
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
                        <div class="col-md-6">
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
                    </div>

                      <table class="table table-striped table-bordered table-hover" >
                            <thead>
                            <tr role="row" class="heading">
                              @foreach ($services as $service )
                                <th width="10%">
                                  {{$service->name}}
                                </th>
                              @endforeach
                            </tr>
                      
                            </thead>
                            <tbody>
                            </tbody>
                      </table>
                  <!-- /.card-body -->
                   </div> 
                  <div class="card-footer">
                    <button type="button" class="btn btn-primary add-new-row" data-index="0">Add new</button>
                  </div>
            </form>
            </div>
            <!-- /.card -->
         </div>
@endsection







    


     {{-- <div class="form-group">
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
                                <input class="form-check-input" type="radio" name="status" id="status-draft" value="hidden" >
                                <label class="form-check-label" for="status-draft">
                                    مخفي
                                </label>
                            </div>
                        </div>
                        
                  </div> --}}