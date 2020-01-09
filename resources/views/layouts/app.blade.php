<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield("title")</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('Bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('FontAwesome/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('Bootstrap/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

</head>
<body>

    <div id="app">
        <main class="py-4">
            @yield("content")
        </main>
    </div>
    <script src="{{asset('Bootstrap/js/jQuery.js')}}"></script>
    <script src="{{asset('Bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{asset('js/jquery.dataTable.js')}}"></script>
    <script src="{{asset('js/dataTables.bootstrap4.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').dataTable();
        } );
    </script>
</body>
</html>
