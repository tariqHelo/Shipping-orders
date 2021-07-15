@extends('layouts.admin')

@section('title', 'جميع المدن')


@section('breadcrumb')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">City</li>
</ol>
@endsection

@section('content')
    
          <div class="card">
            <div class="card-header">
               <a type="button" class="btn btn-primary" href="{{ route('city.create') }}">إضافة</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                  <th>#</th>
                  <th>إسم المدينة</th>
                  <th>الإسم بالإنجليزي
                  </th>
                  <th>الحالة</th>
                  <th> 4</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($cities as $city)
                      <tr>
                          <td>{{$city->name}}</td>
                          <td>{{$city->english_name}}
                          </td>
                          <td>{{$city->status}}</td>
                          <td>5</td>
                          <td>C</td>
                      </tr>
                    @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>إسم المدينة</th>
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