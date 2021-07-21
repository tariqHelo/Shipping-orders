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

          <div class="card">
            <div class="card-header">
               <a type="button" class="btn btn-primary" href="{{ route('order.create') }}">إضافة <i class="fa fa-plus"></i> </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                  <th>id</th>
                  <th>إسم الدولة</th>
                  <th>الإسم بالإنجليزي</th>
                  <th>الحالة</th>
                  <th>الإجراءات</th>
                  </tr>
                </thead>
                <tbody>
                  {{-- @foreach ($countries as $country)
                    <tr>
                         <th>{{$country->id}}</th>
                        <td>{{$country->name}}</td>
                        <td>{{$country->english_name}}
                        </td>
                        <td>
                              @if($country->status=='active')
                                  <span class="btn btn-success btn-sm">مفعل</span>
                              @elseif($country->status=='draft')
                                  <span class="btn btn-warning btn-sm">غير مفعل</span>
                              @else($order->order_status_id==3)
                                  <span class="btn btn-danger btn-sm">مخفي</span>
                              @endif
                          </td>
                        	<td>   
                              <a href="{{ route('country.edit', $country->id) }}" class="btn btn-primary btn-sm"><i class='fa fa-edit'></i></a>
                              <a href="{{ route('country.show', $country->id) }}" class="btn btn-success btn-sm"><i class='fa fa-eye'></i></a>
                              <a href="{{ route('country.delete', $country->id) }}" onclick='return confirm("Are you sure dude?")' class="btn btn-danger btn-sm"><i class='fa fa-trash'></i></a>
                        </td>
                    </tr>
                  @endforeach --}}
                 
                </tbody>
                <tfoot>
                <tr>
                  <th>id</th>
                  <th>إسم الدولة</th>
                  <th>الإسم بالإنجليزي
                  </th>
                  <th>الحالة</th>
                  <th> الإجراءات</th>
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