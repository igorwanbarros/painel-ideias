@extends('base')
@section('body')
    <section class="ui two column doubling stackable grid container padded">
        <div class="column">
            Login
        </div>
        <div class="column">
            <form class="ui form segment">
                <h3 class="header">
                    <i class="lock icon"></i> Acesso ao Sistema
                </h3>
                <div class="ui fluid left icon input">
                    <i class="user icon"></i>
                    <input type="text" class="field" placeholder="Informe seu E-mail">
                </div>
                <br>

                <div class="ui fluid left icon input">
                    <i class="lock icon"></i>
                    <input type="password" class="field" placeholder="Informe sua senha">
                </div>
                <br>

                <button type="submit" class="ui fluid black button">Login</button>
            </form>
        </div>
    </section>
@stop