@extends('layouts.admin')

@section('title', 'جميع الخدمات')


@section('breadcrumb')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Country</li>
</ol>
@endsection

@section('content')
    
          <div class="card">
            <div class="card-header">
               <a type="button" class="btn btn-primary" href="{{ route('service.create') }}">إضافة</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                  <th>id</th>
                  <th>إسم الدولة</th>
                  <th>الإسم بالإنجليزي
                  </th>
                  <th>الحالة</th>
                  <th> النوع</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($services as $service)
                    <tr>
                        <td>{{$service->name}}</td>
                        <td>{{$service->english_name}}
                        </td>
                        <td>{{$service->status}}</td>
                        <td>{{$service->type}}</td>
                        <td>C</td>
                    </tr>
                  @endforeach
                 
                </tbody>
                <tfoot>
                <tr>
                  <th>id</th>
                  <th>إسم الدولة</th>
                  <th>الإسم بالإنجليزي
                  </th>
                  <th>الحالة</th>
                  <th> النوع</th>
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