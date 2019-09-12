<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

/**
* @OA\Info(title="API", version="0.0.1")
**/

/**
 * @OA\Post(
 *     path="/login",
 *     description="auth",
 *     @OA\Parameter(
 *          name="eventID",
 *          in="query",
 *          required=false,
 *          description="The event ID specific to this event",
 *          @OA\Schema(
 *              type="string"
 *          ),
 *     ),
 *     @OA\Response(response="default", description="Welcome page")
 * )
 */

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
