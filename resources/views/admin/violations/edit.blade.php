@extends('layouts.admin')

@section('title', 'المخالفات')


@section('breadcrumb')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Products</li>
</ol>
@endsection



@section('content')
@include('shared.msg')
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
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title-rtl">تعديل مخالفة</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  action="{{route('violation.update' , $violation->id )}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                 @include('admin.violations._form', [
                    'button' => 'إضافة'
                ])
              </form>
            </div>
            <!-- /.card -->
         </div>
@endsection