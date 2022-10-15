<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- MDB -->
    <link href="{{asset('backend/Validation/mdb.min.v5.css')}}" rel="stylesheet"/>

    <title>@yield('title')</title>
</head>
<body>


@yield('content')


<!-- MDB -->
<script src="{{asset('backend')}}/js/jquery-3.4.1.min.js"></script>
<script src="{{asset('backend/Validation/mdb.min.v5.js')}}"></script>

<script src="{{asset('backend')}}/js/sweetalert.min.js"></script>
<script src="{{asset('backend')}}/js/axios.min.js"></script>
<script src="{{asset('backend/Validation/validation.js')}}"></script>
<script src="{{asset('backend')}}/js/custom.js"></script>

@yield('script')
</body>
</html>

