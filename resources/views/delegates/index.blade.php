@extends('layouts.admin')

@section('title', 'جميع تاجر')


@section('breadcrumb')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Country</li>
</ol>
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
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title-rtl">إضافة تاجر</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="" method="POST">
                @csrf
                  <div class="card-body">
                  <div class="row">
                           <div class="col-md-6">
															<div class="form-group">
																<label class="control-label">First Name</label>
																<input type="text" id="firstName" class="form-control" placeholder="Chee Kin">
															</div>
														</div>
                             <div class="col-md-6">
															<div class="form-group">
																<label class="control-label">First Name</label>
																<input type="text" id="firstName" class="form-control" placeholder="Chee Kin">
															</div>
														</div>
                             <div class="col-md-6">
															<div class="form-group">
																<label class="control-label">First Name</label>
																<input type="text" id="firstName" class="form-control" placeholder="Chee Kin">
															</div>
														</div>
                      
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">إسم البلد بالإنجليزية</label>
                    <input type="string" class="form-control @error('english_name') is-invalid @enderror" name="english_name" id="exampleInputEmail1" placeholder="إسم البلد بالإنجليزية">
                  </div>
                   <div class="form-group">
                      <label>إضافة المدينة </label>
                      <select class="select2"  name="cities[]" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                        {{-- @foreach($cities as $id => $cities)
                            <option value="{{ $id }}" {{ in_array($id, old('cities', [])) ? 'selected' : '' }}>{{ $cities }}</option>
                        @endforeach --}}
                      </select>
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
                      
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">إضافة</button>
                  <button class="btn btn-danger" type="submit"> إلغاء</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
         </div>
@endsection