<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsVerified
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $applicant = auth()->user()->applicant();
        if(!$applicant->exists()) {
            if($request->routeIs('application')) {
                return $next($request);
            }
            return redirect(url('/application'));
        } else {
            $applicant = auth()->user()->load('applicant');
            if(!$applicant->is_verified) {
                if($request->routeIs('message')) {
                    return $next($request);
                }
                return redirect(url('/message'));
            } else {
                if($applicant->load('exams')) {
                    if($request->routeIs('result')) {
                        return $next($request);
                    }
                    return redirect(url('/result'));
                } else {
                    if($request->routeIs('verified')) {
                        return $next($request);
                    }
                    return redirect(url('/verified'));
                }

            }
        }
    }
}
