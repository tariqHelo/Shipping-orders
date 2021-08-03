@extends('layouts.admin')

@section('title', 'توزيعات المركبات')


@section('breadcrumb')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">car</li>
</ol>
@endsection

@section('content')
        @include('shared.msg')

          <div class="card">
            <div class="card-header">
               <a type="button" class="btn btn-primary" href="{{ route('distribution.create') }}">إضافة <i class="fa fa-plus"></i> </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                  <th>id</th>
                  <th>نوع المركبة </th>
                  <th>التاريخ</th>
                  <th>الإجراءات</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach ($distributions as $distribution)
                    <tr>
                        <th>{{$distribution->id}}</th>
                        <td>{{$distribution->car->vehicle_type}}</td>
                        <td>{{$distribution->date}}</td>
                        	<td>   
                              <a href="{{route('distribution.edit' , $distribution->id )}}" class="btn btn-primary btn-sm"><i class='fa fa-edit'></i></a>
                              <a href="" onclick='return confirm("Are you sure dude?")' class="btn btn-danger btn-sm"><i class='fa fa-trash'></i></a>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>id</th>
                  <th>نوع المركبة </th>
                  <th>التاريخ</th>
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