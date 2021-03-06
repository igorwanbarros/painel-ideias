<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class Authenticate
{

    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;


    /**
     * Create a new filter instance.
     *
     * @param  Guard $auth
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }


    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next, $permission = NULL)
    {
        if ($this->auth->guest()) {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                $previous = $request->session()->get('_previous');
                $isLogout = isset($previous['url']) && strpos($previous['url'], 'logout') !== false ? true : false;

                // Lumen has no Redirector::guest(), this line is put the intended URL to a session like Redirector::guest() does
                app('session')->put('url.intended', app('url')->full());
                // Set your login URL here
                $redirect = redirect()->route('login');

                if (!$isLogout) {
                    $redirect->withErrors([
                        'error' => 'Realize o login para acessar a página solicitada.'
                    ]);
                }

                return $redirect;
            }
        }
        return $next($request);
    }
}