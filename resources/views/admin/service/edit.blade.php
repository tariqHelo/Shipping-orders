@extends('layouts.admin')

@section('title' , '')

@section('breadcrumb')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Products</li>
</ol>
@endsection

@section('content')
    <!-- left column -->
          <div class="col-md-12">
             @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach($errors->all() as $message)
                      <li>{{ $message }}</li>
                      @endforeach
                  </ul>
              </div>
            @endif
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title-rtl">إضافة دولة</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('service.update' , $service->id)}}" method="post">
                @csrf
                @method('PUT')
                
                 @include('admin.service._form', [
                    'button' => 'تعديل'
                ])

              </form>
            </div>
            <!-- /.card -->
         </div>
@endsection