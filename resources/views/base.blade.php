<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Semantic</title>

    <!-- jquery -->
    <script src="{!! url('assets/jQuery-2.1.4.min.js') !!}" type="text/javascript"></script>

    <!-- semantic-ui -->
    <link rel="stylesheet" href="{!! url('assets/semantic.min.css') !!}"/>
    <script src="{!! url('assets/semantic.min.js') !!}" type="text/javascript"></script>

    <!-- sweetAlert -->
    <link rel="stylesheet" href="{!! url('assets/sweetalert/sweetalert.css') !!}"/>
    <script src="{!! url('assets/sweetalert/sweetalert.min.js') !!}" type="text/javascript"></script>

    <!-- toastr -->
    <link rel="stylesheet" href="{!! url('assets/toast/jquery.toast.css') !!}"/>
    <script src="{!! url('assets/toast/jquery.toast.js') !!}" type="text/javascript"></script>

    <!-- app -->
    <link rel="stylesheet" href="{!! url('assets/app/app.css') !!}"/>
    <script src="{!! url('assets/app/app.js') !!}" type="text/javascript"></script>
</head>
<body>
<span id="urlBase" data-url="{!! url() !!}"></span>

@yield('body')

</body>
</html>
