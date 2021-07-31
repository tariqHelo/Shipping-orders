@extends('layouts.admin')

@section('title', 'جميع الفواتير')


@section('breadcrumb')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">city</li>
</ol>
@endsection

@section('content')
        @include('shared.msg')

          <div class="card">
            <div class="card-header">
               <a type="button" class="btn btn-primary" href="{{ route('spending.create') }}">إضافة <i class="fa fa-plus"></i> </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                  <th>id</th>
                  <th>إسم الفاتورة </th>
                  <th>رقم الفاتورة</th>
                  <th>الإجراءات</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($spendings as $spending)
                    <tr>
                         <th>{{$spending->id}}</th>
                          <td>{{$spending->bill}}</td>
                       <td>{{$spending->bill_number}}</td>
                        {{-- <td>{{$spending->created_at}}</td> --}}
                        	<td>   
                              <a href="{{route('spending.edit' , $spending->id )}}" class="btn btn-primary btn-sm"><i class='fa fa-edit'></i></a>
                              <a href=""onclick='return confirm("Are you sure dude?")' class="btn btn-danger btn-sm"><i class='fa fa-trash'></i></a>
                         </td>
                    </tr>
                  @endforeach
                 
                </tbody>
                <tfoot>
                <tr>
                   <th>id</th>
                  <th>إسم الفاتورة </th>
                  <th>رقم الفاتورة</th>
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