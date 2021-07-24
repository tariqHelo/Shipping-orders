@extends('layouts.admin')
@section('title', '')

@section('content')
@include('shared.msg')
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h5 class="card-title-rtl">إضافة مستخدم جديد</h5>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="card-body">
                 <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 control-label">الإسم</label>
                    <div class="col-sm-10">
                      <input type="email" name="name" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 control-label">الإيميل</label>
                    <div class="col-sm-10">
                      <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 control-label">كلمة المرور</label>
                    <div class="col-sm-10">
                      <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 control-label">الرولز</label>
                    <div class="col-sm-10">
                     <select class="form-control select2" name="roles[]" id="roles" multiple required>
                         @foreach($roles as $id => $roles)
                          <option value="{{ $id }}" {{ in_array($id, old('roles', [])) ? 'selected' : '' }}>{{ $roles }}</option>
                        @endforeach
                    </select>   
                    </div>
                  </div>
                 
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                   <button type="submit" class="btn btn-primary">إضافة</button>
                    <a href="{{route('users.index')}}" class="btn btn-danger" type="button"> إلغاء</a>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

          </div>
@endsection








  {{-- <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 control-label">الإسم </label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 control-label">الإيميل </label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 control-label">كلمة المرور</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 control-label">كلمة المرور</label>
                    <div class="col-sm-10">
                 <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
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
              </div> --}}