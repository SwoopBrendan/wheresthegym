<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Wizard Styles -->
    <link href="{{ asset('bootstrap-wizard/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap-wizard/assets/css/gsdk-bootstrap-wizard.css') }}" rel="stylesheet">

    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>

    <style>
        body {
            background: url('bootstrap-wizard/assets/img/wallpaper.jpg') no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>
</head>

<body>
<div class="wrapper">
    @include('partials.navbar')

    <div class="content">
        @yield('content')
    </div>
</div>
</body>

<!-- Wizard JS -->
<script src="{{ asset('bootstrap-wizard/assets/js/jquery-1.10.2.js') }}" type="text/javascript"></script>
<script src="{{ asset('bootstrap-wizard/assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('bootstrap-wizard/assets/js/jquery.validate.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('bootstrap-wizard/assets/js/jquery.bootstrap.wizard.js') }}" type="text/javascript"></script>
<script src="{{ asset('bootstrap-wizard/assets/js/gsdk-bootstrap-wizard.js') }}" type="text/javascript"></script>

@yield('scripts')

<script type="text/javascript">
    $(document).ready(function(){

    });
</script>
</html>
