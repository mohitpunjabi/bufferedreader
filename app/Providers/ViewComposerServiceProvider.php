<?php namespace App\Providers;

use App\Issue;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
        // Using Closure based composers...
        View::composer('partials.nav', function($view)
        {
            $issues = Cache::remember('all-issues', Carbon::MINUTES_PER_HOUR, function()
            {
                return Issue::latest()->get();
            });
            $view->with('issues', $issues);
            Cache::forget('all-issues');
        });
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

}
