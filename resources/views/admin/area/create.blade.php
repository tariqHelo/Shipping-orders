@extends('layouts.admin')

@section('title', ' إضافة منطقة')


@section('breadcrumb')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Products</li>
</ol>
@endsection

@section('content')
 <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title-rtl">إضافة مدينة</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
               <form role="form" action="{{route('area.store')}}" method="POST">
               
                  <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                              <label>الدولة</label>
                              <select class="form-control">
                                <option>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                              </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                              <label>المدينة</label>
                              <select class="form-control">
                                <option>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                              </select>
                          </div>
                        </div>
                    </div>

                      <table class="table table-striped table-bordered table-hover" >
                            <thead>
                            <tr role="row" class="heading">
                              @foreach ($services as $service )
                                <th width="10%">
                                  {{$service->name}}
                                </th>
                              @endforeach
                            </tr>
                      
                            </thead>
                            <tbody>
                            </tbody>
                      </table>
                  <!-- /.card-body -->
                   </div> 
                  <div class="card-footer">
                    <button type="button" class="btn btn-primary add-new-row" data-index="0">Add new</button>
                  </div>
            </form>
            </div>
            <!-- /.card -->
         </div>
@endsection




