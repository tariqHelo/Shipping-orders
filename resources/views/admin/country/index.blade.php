@extends('layouts.admin')

@section('title', 'جميع الدول')


@section('breadcrumb')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Country</li>
</ol>
@endsection

@section('content')
    
          <div class="card">
            <div class="card-header">
               <a type="button" class="btn btn-primary" href="{{ route('country.create') }}">إضافة</a>
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
                  <th> 4</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($countries as $country)
                    <tr>
                        <td>{{$country->name}}</td>
                        <td>{{$country->english_name}}
                        </td>
                        <td>{{$country->status}}</td>
                        <td>5</td>
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
                  <th> 4</th>
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