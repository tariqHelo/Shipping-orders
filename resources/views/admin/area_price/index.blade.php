@extends('layouts.admin')

@section('title', '')


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
                <h3 class="card-title-rtl">إضافة أسعار المناطق</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
                  <div class="row">
                      <div class="col-4">
                          <div class="form-group">
                              <label for="country_id">الدولة</label>
                              <select name="country_id" id="country_id" class="form-control">
                                  <option value=""> --- </option>
                                  @foreach($countries as $country)
                                      <option value="{{ $country->id }}" {{ old('country_id') == $country->id ? 'selected' : '' }}>{{ $country->name }}</option>
                                  @endforeach
                              </select>
                              @error('country_id')<span class="text-danger">{{ $message }}</span>@enderror
                          </div>
                      </div>
                      <div class="col-4">
                          <div class="form-group">
                              <label for="city_id">المدينة</label>
                              <select name="city_id" id="city_id" class="form-control">
                              </select>
                              @error('city_id')<span class="text-danger">{{ $message }}</span>@enderror
                          </div>
                      </div>
                      <div class="col-4">
                          <div class="form-group">
                              <label for="district_id">المنطقة</label>
                               <select name="district_id" id="district_id" class="form-control">
                              </select>
                              @error('district_id')<span class="text-danger">{{ $message }}</span>@enderror
                          </div>
                      </div>
                  </div>
                </div>
                <table class="table table-striped table-bordered table-hover" id="datatable_ajax">
                    <thead>
                        <tr role="row" class="heading">
                            @foreach($services as $service)
                                <th width="5%">
                                    {{$service->name}}
                            </th>   
                            @endforeach
                        </tr>
                        
                    </thead>
                    <tbody>
                        <tr role="row" class="filter">
                            @foreach($services as $service)
                                <td>
                                  <input type="text" class="form-control form-filter input-sm" name="order_id">
                                </td>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
                 <div class="card-footer">
                    <button type="button" class="btn btn-primary add-new-row" data-index="0">حفظ</button>
                  </div>

            </div>
            
            <!-- /.card -->
         </div>
@endsection
@section('script')
    <script>
        $(function () {
            populateCities();
            populateDistricts();


            $(document).on('change', '#country_id', function() {
               populateCities();
               populateDistricts();
               return false;
            });

            $(document).on('change', '#city_id', function() {
                populateDistricts();
                return false;
            });

            function populateCities() {
                $('option', $('#city_id')).remove();
                $('#city_id').append($('<option></option>').val('').html(' --- '));

                var countryIdVal = $('#country_id').val() != null ? $('#country_id').val() : '{{ old('country_id') }}';
                $.get("{{ route('get_cities') }}", { country_id: countryIdVal }, function (data) {
                    $.each(data, function(val, text) {
                        var selectedVal = val == '{{ old('city_id') }}' ? "selected" : "";

                        $('#city_id').append($('<option ' + selectedVal + '></option>').val(val).html(text));
                    })
                }, "json");
            }
            function populateDistricts() {
                $('option', $('#district_id')).remove();
                $('#district_id').append($('<option></option>').val('').html(' --- '));

                var cityIdVal = $('#city_id').val() != null ? $('#city_id').val() : '{{ old('city_id') }}';
                $.get("{{ route('get_districts') }}", { city_id: cityIdVal }, function (data) {
                    $.each(data, function(val, text) {
                        var selectedVal = val == '{{ old('district_id') }}' ? "selected" : "";
                        $('#district_id').append($('<option ' + selectedVal + '></option>').val(val).html(text));
                    })
                }, "json");
            }

        });
    </script>
@endsection




