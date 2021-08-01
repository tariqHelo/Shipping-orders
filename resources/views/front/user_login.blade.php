@extends('layouts.front')

@section('content')

    <!-- START PRELOADER -->
    
    <!-- END PRELOADER -->
    <!-- START NAVBAR -->
    @include('site.navbar')
    <!-- END NAVBAR -->
    <!-- START TOP BANNER AREA -->
    @include('site.top_banner',[
        'text' => 'سجل الإن'
    ])
    <!-- END TOP BANNER AREA -->

    <!-- START FORM REGISTER -->
    @include('site.register')
    <!-- END FORM REGISTER -->
    
    <!-- START APP DOWNLOAD SECTION -->
    @include('site.app-down')
    <!-- END APP DOWNLOAD SECTION -->
    <!-- START FOOTER AREA -->
     @include('site.footer-top')
     @include('site.footer')
    <!-- END FOOTER AREA -->


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
                $.get("{{ route('get_civilize') }}", { country_id: countryIdVal }, function (data) {
                    $.each(data, function(val, text) {
                        var selectedVal = val == '{{ old('city_id') }}' ? "selected" : "";

                        $('#city_id').append($('<option ' + selectedVal + '></option>').val(val).html(text));
                    })
                }, "json");
            }
            function populateDistricts() {
                $('option', $('#area_id')).remove();
                $('#area_id').append($('<option></option>').val('').html(' --- '));

                var cityIdVal = $('#city_id').val() != null ? $('#city_id').val() : '{{ old('city_id') }}';
                $.get("{{ route('get_districts') }}", { city_id: cityIdVal }, function (data) {
                    $.each(data, function(val, text) {
                        var selectedVal = val == '{{ old('area_id') }}' ? "selected" : "";
                        $('#area_id').append($('<option ' + selectedVal + '></option>').val(val).html(text));
                    })
                }, "json");
            }

        });
    </script>
@endsection

