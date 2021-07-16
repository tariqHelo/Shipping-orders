@extends('layouts.admin')

@section('title', 'جميع الخدمات')


@section('breadcrumb')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">service</li>
</ol>
@endsection

@section('content')
    
          <div class="card">
            <div class="card-header">
               <a type="button" class="btn btn-primary" href="{{ route('service.create') }}">إضافة <i class="fa fa-plus"></i> </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                  <th>#</th>
                  <th>إسم الدولة</th>
                  <th>الإسم بالإنجليزي
                  </th>
                  <th>الحالة</th>
                  <th> النوع</th>
                  <th>الإجراءات</th>

                  </tr>
                </thead>
                <tbody>
                  @foreach ($services as $service)
                    <tr>
                       <th>{{$service->id}}</th>
                        <td>{{$service->name}}</td>
                        <td>{{$service->english_name}}
                        </td>

                        <td>
                              @if($service->status=='active')
                                  <span class="btn btn-success btn-sm">فعال</span>
                              @elseif($service->status=='draft')
                                  <span class="btn btn-warning btn-sm">غير مفعل</span>
                              @else($order->order_status_id==3)
                                  <span class="btn btn-danger btn-sm">مخفي</span>
                              @endif
                          </td>
                        <td>
                              @if($service->type=='local')
                                  <span class="btn btn-info btn-sm">محلي </span>
                              @elseif($service->type=='international')
                                  <span class="btn btn-dark btn-sm">دولي</span>
                              @endif
                          </td>
                          <td>   
                              <a href="" class="btn btn-primary btn-sm"><i class='fa fa-edit'></i></a>
                              <a href="" class="btn btn-success btn-sm"><i class='fa fa-eye'></i></a>
                              <a href="" onclick='return confirm("Are you sure dude?")' class="btn btn-danger btn-sm"><i class='fa fa-trash'></i></a>
                        </td>
                    </tr>
                  @endforeach
                 
                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>إسم الدولة</th>
                  <th>الإسم بالإنجليزي
                  </th>
                  <th>الحالة</th>
                  <th> النوع</th>
               <th>الإجراءات</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

@endsection