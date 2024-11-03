<?php

namespace App\Http\Middleware;

use App\Models\Tracker;
use Closure;
use Illuminate\Http\Request;

class ValidTrackerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $tracker_id = $request->route('tracker_id');
        if(empty($tracker_id)){
            return redirect('/');
        }

        $tracker=Tracker::find($tracker_id);
        if(!$tracker){
            return redirect('/');
        }

        return $next($request);
    }
}
