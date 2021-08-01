@extends('layouts.admin')

@section('title', 'جميع المخالفات')


@section('breadcrumb')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">violation</li>
</ol>
@endsection

@section('content')
        @include('shared.msg')


          <div class="card">
            <div class="card-header">
               <a type="button" class="btn btn-primary" href="{{ route('violation.create') }}">إضافة <i class="fa fa-plus"></i> </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                  <th>#</th>
                  <th>رقم المخالفة</th>
                  <th>تاريخ ووقت المخالفة</th>
                  <th>نوع المخالفة</th>
                  <th>المدينة</th>
                  <th>الشارع</th>
                  <th> الصورة</th>
                  <th>حالة المخالفة </th>
                  <th>الإجراءات</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($violations as $violation)
                    <tr>
                         <th>{{$violation->id}}</th>
                        <td>{{$violation->violation_number}}</td>
                        <td>{{$violation->date}}
                        <td>{{$violation->type}}
                        <td>{{$violation->city}}</td>
                        <td>{{$violation->street}}
                        <td><img src="{{ $violation->image }}" width="60" alt=""></td>
                        </td>
                        <td>
                              @if($violation->status=='paid')
                                  <span class="btn btn-success btn-sm">مدفوعة</span>
                              @elseif($violation->status=='unpaid')
                                  <span class="btn btn-warning btn-sm">غير مدفوعة</span>
                              @else($order->order_status_id==3)
                                  <span class="btn btn-danger btn-sm">ملغي</span>
                              @endif
                          </td>
                        	<td>   
                              <a href="{{route('violation.edit' , $violation->id )}}" class="btn btn-primary btn-sm"><i class='fa fa-edit'></i></a>
                              <a href="{{route('violation.delete' , $violation->id )}}" onclick='return confirm("Are you sure dude?")' class="btn btn-danger btn-sm"><i class='fa fa-trash'></i></a>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>رقم المخالفة</th>
                  <th>تاريخ ووقت المخالفة</th>
                  <th>نوع المخالفة</th>
                  <th>المدينة</th>
                  <th>الشارع</th>
                  <th> الصورة</th>
                  <th>حالة المخالفة </th>
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