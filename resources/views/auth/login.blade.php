@extends('base')
@section('body')
    <section class="ui two column doubling stackable grid container padded">
        <div class="column">

        </div>
        <div class="column">
            <form class="ui form segment" method="POST" action="{!!url('login')!!}">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <h3 class="header">
                    <i class="lock icon"></i> Acesso ao Sistema
                </h3>

                <div class="ui fluid left icon input">
                    <i class="user icon"></i>
                    <input type="text" class="field" placeholder="Informe seu E-mail" name="email">
                </div>
                <br>

                <div class="ui fluid left icon input">
                    <i class="lock icon"></i>
                    <input type="password" class="field" placeholder="Informe sua senha" name="password">
                </div>
                <br>

                <button type="submit" class="ui fluid black button">Login</button>

                @if (count($errors) > 0)
                <div class="ui negative message">
                    <i class="close icon"></i>
                    <div class="header">Acesso negado</div>
                    <ul class="list">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
                @endif
            </form>
        </div>
    </section>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.close').on('click', function () {
                $(this).closest('.message')
                    .transition('fade');
            });
        })
    </script>
@stop