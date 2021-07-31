@extends('layouts.admin')

@section('title', 'جميع المناطق')


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
               <a type="button" class="btn btn-primary" href="{{route('price.create')}}">إضافة <i class="fa fa-plus"></i> </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                        <th>
                        المدينة
                        </th>
                        @foreach($services as $service)
                            <th >
                                {{$service->name}}
                            </th>   
                        @endforeach
                        <th>
                        الإجراءات
                    </th>
                  </tr>
                </thead>
                <tbody>
                
            
                </tbody>
                <tfoot>
                <tr>
                            <th>
                            المدينة
                            </th>
                            @foreach($services as $service)
                                <th >
                                    {{$service->name}}
                                </th>   
                            @endforeach
                            <th>
                            الإجراءات
                        </th>
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