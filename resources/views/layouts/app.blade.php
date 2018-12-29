<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ URL::asset('font-awesome/css/font-awesome.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/vendor.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}" />
    <link rel="stylesheet" id="loadbefore" href="{{ URL::asset('css/style.css') }}" />

</head>
<body>

  <!-- Wrapper-->
    <div id="wrapper">

        @if (Auth::check())

            <!-- Navigation -->
            @include('layouts.navigation')

        @endif

        <!-- Page wraper -->
        <div id="page-wrapper" class="gray-bg">

            @if (Auth::check())

                <!-- Top Navigation -->
                @include('layouts.topnavbar')

            @endif

            <!-- Main view  -->
            @yield('content')

            <!-- Footer -->
            @include('layouts.footer')

        </div>
        <!-- End page wrapper-->

    </div>
    <!-- End wrapper-->

<!-- Mainly scripts -->
<script src="{{ URL::asset('js/jquery-3.1.1.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/plugins/metisMenu/jquery.metisMenu.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
<!-- Custom and plugin javascipt -->
<script src="{{ URL::asset('js/inspinia.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/plugins/pace/pace.min.js') }}" type="text/javascript"></script>



@section('scripts')
@show

</body>
</html>
