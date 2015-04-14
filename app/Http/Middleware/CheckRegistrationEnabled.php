<?php namespace App\Http\Middleware;

use Closure;

class CheckRegistrationEnabled {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
        if(getenv('ENABLE_REGISTRATION') == "true")
        {
            return $next($request);
        }

        abort(404);
	}

}
