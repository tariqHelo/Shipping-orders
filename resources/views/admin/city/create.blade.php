@extends('layouts.admin')

@section('title', ' إضافة مدينة')


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
              <form role="form" action="{{route('city.store')}}" method="POST">
                @csrf
                @method('POST')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">إسم المدينة </label>
                    <input type="string" class="form-control" name="name" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">إسم المدينة بالإنجليزية</label>
                    <input type="string" class="form-control" name="english_name" id="exampleInputEmail1" placeholder="Enter email">
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