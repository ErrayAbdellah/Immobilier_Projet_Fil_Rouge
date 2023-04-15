<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class isSuperAdmin
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
        $user = auth()->user();
        $role = User::with(['role'])->find($user->id);
        if($role->role->name === 'SuperAdmin'){
            
            return $next($request);
        }else{
            return response()->json([
                'status' => 'error',
                'message' => 'Unauthorized',
            ], 401);
        }
    }
}
