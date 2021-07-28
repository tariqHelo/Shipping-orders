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
              <form action="{{route('users.store')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 control-label">الإسم</label>
                    <div class="col-sm-10">
                      <input type="string" name="name" class="form-control" id="inputEmail3" placeholder="الإسم">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 control-label">الإيميل</label>
                    <div class="col-sm-10">
                      <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="الإيميل">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 control-label"> الصورة الشخصية</label>
                    <div class="col-sm-10">
                      <input type="file" name="image" class="form-control" placeholder="الصورة الشخصية">
                    </div>
                  </div>
                   <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 control-label">رقم الهاتف المتحرك</label>
                    <div class="col-sm-10">
                      <input type="string" name="phone" class="form-control" id="inputEmail3" placeholder="رقم الهاتف المتحرك">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 control-label"> تاريخ بدء العمل</label>
                    <div class="col-sm-10">
                      <input type="string" name="work_start" class="form-control" id="inputEmail3" placeholder="تاريخ بدء العمل">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 control-label">الجنسية</label>
                    <div class="col-sm-10">
                      <input type="string" name="nationality" class="form-control" id="inputEmail3" placeholder="الجنسية">
                    </div>
                  </div>
                   <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 control-label">رقم الهوية</label>
                    <div class="col-sm-10">
                      <input type="string" name="id_number" class="form-control" id="inputEmail3" placeholder="رقم الهوية">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 control-label">تاريخ انتهاء الهوية</label>
                    <div class="col-sm-10">
                      <input type="date" name="id_expiry" class="form-control" id="inputEmail3" placeholder="تاريخ انتهاء الهوية">
                    </div>
                  </div>
                   <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 control-label">صورة الهوية</label>
                    <div class="col-sm-10">
                      <input type="file" name="id_image" class="form-control" id="inputEmail3" placeholder="صورة الهوية">
                    </div>
                  </div>
                   <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 control-label">رقم الجواز</label>
                    <div class="col-sm-10">
                      <input type="string" name="passport" class="form-control" id="inputEmail3" placeholder="رقم الجواز">
                    </div>
                  </div>
                   <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 control-label"> تاريخ انتهاء الجواز</label>
                    <div class="col-sm-10">
                      <input type="date" name="passport_expiry" class="form-control" id="inputEmail3" placeholder="تاريخ انتهاء الجواز">
                    </div>
                  </div>
                   <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 control-label"> صورة الجواز</label>
                    <div class="col-sm-10">
                      <input type="file" name="passport_image" class="form-control" id="inputEmail3" placeholder=" صورة الجواز">
                    </div>
                  </div>
                   
                   <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 control-label">تاريخ إنتهاء الإقامة</label>
                    <div class="col-sm-10">
                      <input type="date" name="residence_expiry" class="form-control" id="inputEmail3" placeholder="تاريخ إنتهاء الإقامة">
                    </div>
                  </div>
                   <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 control-label">صورة الإقامة</label>
                    <div class="col-sm-10">
                      <input type="file" name="residence_image" class="form-control" id="inputEmail3" placeholder="صورة الإقامة">
                    </div>
                  </div>
                  
 
                   
                   <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 control-label">رقم رخصة القيادة</label>
                    <div class="col-sm-10">
                      <input type="" name="license" class="form-control" id="inputEmail3" placeholder="رقم رخصة القيادة">
                    </div>
                  </div>
                   <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 control-label">صورة الرخصة</label>
                    <div class="col-sm-10">
                      <input type="file" name="license_image" class="form-control" id="inputEmail3" placeholder="صورة الرخصة">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 control-label">تاريخ انتهاء رخصة القيادة</label>
                    <div class="col-sm-10">
                      <input type="date" name="license_expiry" class="form-control" id="inputEmail3" placeholder="تاريخ انتهاء رخصة القيادة">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 control-label">كلمة المرور</label>
                    <div class="col-sm-10">
                      <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="كلمة المرور">
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






