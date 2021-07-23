@extends('layouts.admin')

@section('title', 'جميع الطلبات')


@section('breadcrumb')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Country</li>
</ol>
@endsection


@section('content')
    @include('shared.msg')
      <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">جميع الطلبات </h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                    
                  <th width="10%">رقم الطلب</th>
                  <th width="10%">التاريخ </th>
                  <th width="15%">التاريخ</th>
                  <th>المرسل</th>
                  <th>المستلم</th>
                  <th>الجهة</th>
                  <th>الحالة</th>
                  <th>الإجراءات</th>
                  <th>العرض</th>
                  <th>تتبع</th>
                  <th>تأجيل</th>
                  <th>تحويل</th>
                  <th>فردي</th>
                  <th>ملاحظات</th>
                  <th>إلغاء</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>183</td>
                      <td>John Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-success">Approved</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                      <td>219</td>
                      <td>Alexander Pierce</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-warning">Pending</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                      <td>657</td>
                      <td>Bob Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-primary">Approved</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                      <td>175</td>
                      <td>Mike Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-danger">Denied</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->

        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection

  {{-- <thead>
                  <tr>
                  <th>رقم الطلب</th>
                  <th>تاريخ ووقت الطلب</th>
                  <th>النوع</th>
                  <th>المرسل</th>
                  <th>المستلم</th>
                  <th>الجهة</th>
                  <th>الحالة</th>
                  <th>الإجراءات</th>
                  <th>العرض</th>
                  <th>تتبع</th>
                  <th>تأجيل</th>
                  <th>تحويل</th>
                  <th>إستلام فردي</th>
                  <th>ملاحظات</th>
                  <th>إلغاء</th>
                  </tr>
                </thead> --}}