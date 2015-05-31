<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;

class CORS {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
        $response = $next($request);
        if ($response instanceof Response) {
            $response->header('Access-Control-Allow-Origin', 'http://localhost:63342');
            $response->header('Access-Control-Allow-Headers', 'X-Requested-With, Authorization, Content-Type');
        }
		return $response;
	}

}
