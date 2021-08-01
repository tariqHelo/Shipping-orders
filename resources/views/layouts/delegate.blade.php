<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('assets/delegate/sass/style.css')}}" rel="stylesheet">

    <title> Sayer </title>
</head>

<body class="Ar">
    
    <div class="index">
         @if(View::hasSection('content'))
            @yield('content')
        @else
            {{-- Start SidBar --}}
            @include('site1.sidebar')
            {{-- End SidBar --}}
            {{-- Start navTop --}}
            @include('site1.navTop')
            {{-- End navTop --}}
            {{-- Start navigation_bar --}}
            @include('site1.navigation_bar')
            {{-- End navigation_bar --}}
            {{-- Start cards --}}
            @include('site1.cards')
            {{-- End cards --}}
        @endif    
    </div>

    <script src="{{ asset('assets/delegate/sass/components/js/jquery-3.3.1.slim.min.js')}}"></script>
    <script src="{{ asset('assets/delegate/sass/components/js/semantic.min.js')}}"></script>
    <script src="{{ asset('assets/delegate/sass/components/js/popper.min.js')}}"></script>
    <script src="{{ asset('assets/delegate/sass/components/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/delegate/sass/components/js/script.js')}}"></script>
    
</body>

</html>