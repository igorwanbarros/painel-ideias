<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Semantic</title>
    <link rel="stylesheet" href="{!! url('assets/semantic.min.css') !!}"/>
    <script src="{!! url('assets/jQuery-2.1.4.min.js') !!}" type="text/javascript"></script>
    <script src="{!! url('assets/semantic.min.js') !!}" type="text/javascript"></script>

    <!-- SweetAlert -->
    <link rel="stylesheet" href="{!! url('assets/sweetalert/sweetalert.css') !!}"/>
    <script src="{!! url('assets/sweetalert/sweetalert.min.js') !!}" type="text/javascript"></script>

    <!-- APP -->
    <link rel="stylesheet" href="{!! url('assets/app/app.css') !!}"/>
    <script src="{!! url('assets/app/app.js') !!}" type="text/javascript"></script>
</head>
<body>
@include('menu')

<section class="ui two column stackable grid padded">

    <div class="ui twelve wide column divided">
        @yield('content')
    </div>

    <div class="ui four wide column">
        @yield('lists')
    </div>
</section>

<script type="text/javascript">
    app.btnRemover();
</script>
</body>
</html>
