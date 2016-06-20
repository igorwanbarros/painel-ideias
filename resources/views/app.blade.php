<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Semantic</title>
    <link rel="stylesheet" href="{!! url('assets/semantic.min.css') !!}"/>
    <script src="{!! url('assets/jQuery-2.1.4.min.js') !!}" type="text/javascript"></script>
    <script src="{!! url('assets/semantic.min.js') !!}" type="text/javascript"></script>
</head>
<body>
@include('menu')

<section class="ui two column stackable grid padded">

    <div class="twelve wide column divided">
        @yield('content')
    </div>

    <div class="ui four wide column">
        <div class="ui relaxed divided animated list">
            <h3 class="header">
                <i class="large idea middle aligned icon"></i> Ideias recentes
            </h3>

            <div class="item">
                <i class="large history middle aligned icon"></i>

                <div class="content">
                    <a href="" class="header">
                        dsfg
                    </a>

                    <div class="description">
                        dfdbas balb alsbl bals bal
                    </div>
                </div>
            </div>
            <div class="item">
                <i class="large history middle aligned icon"></i>

                <div class="content">
                    <a href="" class="header">
                        dsfg
                    </a>

                    <div class="description">
                        dfdbas balb alsbl bals bal
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    $('select, .dropdow').dropdown();
</script>
</body>
</html>
