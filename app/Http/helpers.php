<?php


if (!function_exists('app_session')) {
    function app_session($key = '') {
        $key = !$key ? 'app.session' : "app.session.$key";

        $session = \Illuminate\Support\Facades\Session::get($key);

        return $session;
    }
}