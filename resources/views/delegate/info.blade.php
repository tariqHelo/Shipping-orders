@extends('layouts.delegate')

@section('content')

    {{-- Start SidBar --}}
    @include('site1.sidebar')
    {{-- End SidBar --}}
    {{-- Start navTop --}}
    @include('site1.navTop')
    {{-- End navTop --}}
    {{-- Start navigation_bar --}}
    @include('site1.navigation_bar')
    {{-- End navigation_bar --}}
    {{-- newOrder  --}}
    @include('site1.newOrder')
    {{-- newOrder  --}}

@endsection