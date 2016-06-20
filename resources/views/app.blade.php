<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Semantic</title>
    <link rel="stylesheet" href="{!! url('assets/semantic.min.css') !!}"/>
    <link rel="stylesheet" href="{!! url('assets/css/app.css') !!}"/>
    <script src="{!! url('assets/jQuery-2.1.4.min.js') !!}" type="text/javascript"></script>
    <script src="{!! url('assets/semantic.min.js') !!}" type="text/javascript"></script>
</head>
<body>
@include('menu')

<section class="ui two column stackable grid padded">

    <div class="ui twelve wide column divided segment">
        @yield('content')
    </div>

    <div class="ui four wide column">
        @yield('lists')
    </div>
</section>

<script type="text/javascript">
    $('select, .dropdow').dropdown();
</script>
</body>
</html>
