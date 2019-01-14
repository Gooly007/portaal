<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <title>me @yield('title')</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.css') }}" />
    <link href="{{ asset('css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" />
    <link rel="stylesheet" id="loadbefore" href="{{ asset('css/style.css') }}" />

</head>
<body>

    <!-- Wrapper-->
      <div id="wrapper">

          @if (Auth::guard('admin')->check())

              <!-- Navigation -->
              @include('admin.layouts.navigation')

          @endif

          <!-- Page wraper -->
          <div id="page-wrapper" class="gray-bg">

              <!-- Top Navigation -->
              @include('admin.layouts.topnavbar')


              <!-- Adds flash message to top of page -->
              @include('flash-message')

              <!-- Main view  -->
              @yield('content')

              <!-- Footer -->
              @include('admin.layouts.footer')

          </div>
          <!-- End page wrapper-->

      </div>
      <!-- End wrapper-->

  <!-- Mainly scripts -->
  <script src="{{ asset('js/jquery-3.1.1.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/popper.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/plugins/metisMenu/jquery.metisMenu.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>

  <script src="{{ asset('js/plugins/dataTables/datatables.min.js') }}"></script>
  <script src="{{ asset('js/plugins/dataTables/dataTables.bootstrap4.min.js') }}"></script>

  <!-- Custom and plugin javascipt -->
  <script src="{{ asset('js/inspinia.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/plugins/pace/pace.min.js') }}" type="text/javascript"></script>



    <!-- Remove flash message after couple of seconds -->
    <script>
    $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
    </script>

@section('scripts')
@show


  </body>
  </html>
