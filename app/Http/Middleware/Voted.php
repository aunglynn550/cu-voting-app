<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class Voted
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
    if($category->type == 'King')
    {
        return redirect('kingvoted');

    }
    // if($category->type == 'Queen')
    // {
    //     return redirect('queenvoted');
    // }
}
       
    

        //  if($user->categories()->type) //Error Code
        // {
        //     return redirect('voted');
        // }

        return $next($request);
       
    }
}
