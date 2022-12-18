<?php

namespace App\Http\Middleware\queen;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
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
            
                if($category->type == 'Queen')
                {
                    return redirect('queen/voted');
                }
            }
                
        return $next($request);
    }
}
