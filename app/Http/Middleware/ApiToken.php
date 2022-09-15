<?php

namespace App\Http\Middleware;

use Closure;

class ApiToken
{
    /**
     * Handle an incoming request.
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
    */
    public function handle($request, Closure $next)
    {
        if( $request->header('Authorization') &&  $request->user_id != null ){
            $user = \DB::connection("mysql")
                            ->table('users')
                            ->select('id')
                            ->where('id', $request->user_id)
                            ->where('token', $request->header('Authorization'))
                            ->count();

            if( $user > 0 ) {
                return $next($request);
            }
        }
        return response()->json([
            'data'    => [],
            'message' => 'Not a valid TOKEN request.',
            'status'  => false
        ]);
        
    }
}
