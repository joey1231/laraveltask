<?php namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\App;
class UrlKeyMiddleware
{
    /**
     * Check if URL has valid URL Security Key.
     * See .env file for more info.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->input('key') != getenv('URL_SECURITY_KEY')) {
            return App::abort(400, 'Ooops, please check your security key.');
        }
        return $next($request);
    }
}