<?php

namespace App\Http\Middleware\allqueen;

use Closure;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class voted
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
        $user = User::find(Auth::id());
        
        foreach($user->categories as $category)
        {
            if($category->type == 'All_Queen')
            {
                return redirect('allqueen/show');

            }
              
            }
        return $next($request);
    }
}
