@extends('layouts.admin')

@section('title', ' إضافة مدينة')


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
              <form  action="{{route('city.store')}}" method="POST">
                @csrf
                 @include('admin.city._form', [
                    'button' => 'إضافة'
                ])
              </form>
            </div>
            <!-- /.card -->
         </div>
@endsection