@extends('layouts.admin')

@section('title', '  جميع المناطق والإسعار')


@section('breadcrumb')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">City</li>
</ol>
@endsection

@section('content')
    
          <div class="card">
            <div class="card-header">
               <a type="button" class="btn btn-primary " href="{{ route('area.create') }}"> إضافة <i class="fa fa-plus"></i> </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th  width="4%">المدينة</th>
                  <th> عادي</th>
                  <th>طرد بريد ممتاز</th>
                  <th>  طعام
                  </th>
                  <th> خاص</th>
                  <th> طرد بريد مستعجل</th>
                  <th> خارجي ممتاز</th>
                  <th>  خارجي سريع</th>
                  <th>  عادي خارج
                  </th>
                  <th> بريد ممتاز خاص</th>
                  <th>الحالة</th>
                  <th  width="4%"> الإجراءات</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($areas as $area)
                      <tr>
                          <td>{{$area->name}}</td>
                          </td>
                          <th>22</th>
                          <td>58</td>
                          <td>55
                          </td>
                          <th>22</th>
                          <td>58</td>
                          <td>55
                          <th>22</th>
                          <td>58</td>
                          <td>55
                          </td>
                          <td>
                              @if($area->status=='active')
                                  <span class="btn btn-success btn-sm">مفعل</span>
                              @elseif($area->status=='draft')
                                  <span class="btn btn-warning btn-sm">غير مفعل</span>
                              @else($order->order_status_id==3)
                                  <span class="btn btn-danger btn-sm">مخفي</span>
                              @endif
                          </td>
                          <td>   
                              <a href="" class="btn btn-primary btn-sm"><i class='fa fa-edit'></i></a>
                              <a href="" class="btn btn-success btn-sm"><i class='fa fa-eye'></i></a>
                              <a href="" onclick='return confirm("Are you sure dude?")' class="btn btn-danger btn-sm"><i class='fa fa-trash'></i></a>
                        </td>
                      </tr>
                    @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th> المدينة</th>
                
                  <th> عادي</th>
                  <th>طرد بريد ممتاز</th>
                  <th>  طعام
                  </th>
                  <th> خاص</th>
                  <th> طرد بريد مستعجل</th>
                  <th> خارجي ممتاز</th>
                  <th>  خارجي سريع</th>
                  <th>  عادي خارج
                  </th>
                  <th> بريد ممتاز خاص</th>
                  <th>الحالة</th>
                  <th> الإجراءات</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
{{-- 
  			<!-- BEGIN SAMPLE TABLE PORTLET-->
						<div class="portlet box purple">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-cogs"></i>Horizontal Scrollable Responsive Table
								</div>
								<div class="tools">
									<a href="javascript:;" class="collapse">
									</a>
									<a href="#portlet-config" data-toggle="modal" class="config">
									</a>
									<a href="javascript:;" class="reload">
									</a>
									<a href="javascript:;" class="remove">
									</a>
								</div>
							</div>
							<div class="portlet-body">
								<div class="table-scrollable">
									<table class="table table-striped table-bordered table-hover">
									<thead>
									<tr>
										<th scope="col" style="width:450px !important">
											 Column header 1
										</th>
										<th scope="col">
											 Column header 2
										</th>
										<th scope="col">
											 Column header 3
										</th>
										<th scope="col">
											 Column header 4
										</th>
										<th scope="col">
											 Column header 5
										</th>
										<th scope="col">
											 Column header 6
										</th>
										<th scope="col">
											 Column header 7
										</th>
										<th scope="col">
											 Column header 8
										</th>
										<th scope="col">
											 Column header 9
										</th>
										<th scope="col">
											 Column header 10
										</th>
									</tr>
									</thead>
									<tbody>
									<tr>
										<td>
											 Table data
										</td>
										<td>
											 Table data
										</td>
										<td>
											 Table data
										</td>
										<td>
											 Table data
										</td>
										<td>
											 Table data
										</td>
										<td>
											 Table data
										</td>
										<td>
											 Table data
										</td>
										<td>
											 Table data
										</td>
										<td>
											 Table data
										</td>
										<td>
											 Table data
										</td>
									</tr>
									<tr>
										<td>
											 Table data
										</td>
										<td>
											 Table data
										</td>
										<td>
											 Table data
										</td>
										<td>
											 Table data
										</td>
										<td>
											 Table data
										</td>
										<td>
											 Table data
										</td>
										<td>
											 Table data
										</td>
										<td>
											 Table data
										</td>
										<td>
											 Table data
										</td>
										<td>
											 Table data
										</td>
									</tr>
									<tr>
										<td>
											 Table data
										</td>
										<td>
											 Table data
										</td>
										<td>
											 Table data
										</td>
										<td>
											 Table data
										</td>
										<td>
											 Table data
										</td>
										<td>
											 Table data
										</td>
										<td>
											 Table data
										</td>
										<td>
											 Table data
										</td>
										<td>
											 Table data
										</td>
										<td>
											 Table data
										</td>
									</tr>
									<tr>
										<td>
											 Table data
										</td>
										<td>
											 Table data
										</td>
										<td>
											 Table data
										</td>
										<td>
											 Table data
										</td>
										<td>
											 Table data
										</td>
										<td>
											 Table data
										</td>
										<td>
											 Table data
										</td>
										<td>
											 Table data
										</td>
										<td>
											 Table data
										</td>
										<td>
											 Table data
										</td>
									</tr>
									<tr>
										<td>
											 Table data
										</td>
										<td>
											 Table data
										</td>
										<td>
											 Table data
										</td>
										<td>
											 Table data
										</td>
										<td>
											 Table data
										</td>
										<td>
											 Table data
										</td>
										<td>
											 Table data
										</td>
										<td>
											 Table data
										</td>
										<td>
											 Table data
										</td>
										<td>
											 Table data
										</td>
									</tr>
									<tr>
										<td>
											 Table data
										</td>
										<td>
											 Table data
										</td>
										<td>
											 Table data
										</td>
										<td>
											 Table data
										</td>
										<td>
											 Table data
										</td>
										<td>
											 Table data
										</td>
										<td>
											 Table data
										</td>
										<td>
											 Table data
										</td>
										<td>
											 Table data
										</td>
										<td>
											 Table data
										</td>
									</tr>
									</tbody>
									</table>
								</div>
							</div>
						</div>
						<!-- END SAMPLE TABLE PORTLET-->
					</div>
				</div>
				<!-- END PAGE CONTENT-->
				</tr> --}}

@endsection