<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link href="{{ asset('paper-dashboard/assets/css/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('paper-dashboard/assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('paper-dashboard/assets/css/paper-dashboard.css') }}" rel="stylesheet">
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
        <link href="{{ asset('paper-dashboard/assets/css/themify-icons.css') }}" rel="stylesheet">
    </head>

    <body>
        <div class="wrapper">
            @include('partials.navbar')

            <div class="content">
                @include('partials.settings')

                @yield('content')
            </div>

            @include('partials.footer')
        </div>
    </body>

    <!--   Core JS Files   -->
    <script src="{{ asset('paper-dashboard/assets/js/jquery-1.10.2.js') }}" type="text/javascript"></script>
    <script src="{{ asset('paper-dashboard/assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="{{ asset('paper-dashboard/assets/js/bootstrap-checkbox-radio.js') }}" type="text/javascript"></script>
    <!--  Charts Plugin -->
    <script src="{{ asset('paper-dashboard/assets/js/chartist.min.js') }}" type="text/javascript"></script>
    <!--  Notifications Plugin    -->
    <script src="{{ asset('paper-dashboard/assets/js/bootstrap-notify.js') }}" type="text/javascript"></script>
    <!-- slider JS -->
    <script src="{{ asset('js/slider.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/custom.js') }}" type="text/javascript"></script>

    @yield('scripts')

    <script type="text/javascript">
        $().ready(function(){

        });
    </script>
</html>
