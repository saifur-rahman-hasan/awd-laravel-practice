<?php

namespace App\Http\Middleware;

use Closure;

class CheckStudentValidity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $running_batch = 167;
        $running_course = "AWD";
        $students = [ 'Hasan', 'Kamal', 'Jamal', 'Seam', 'Atia' ];

        // Check student batch is matches with our batch
        // check the course name also
        // check the name is exists in our record.

        if($running_batch == $request->batch && $running_course == $request->course && in_array($request->name, $students)){
            return $next($request);
        }else{
            dd("Sorry you are not a valid student to access this class.");
        }

    }
}
