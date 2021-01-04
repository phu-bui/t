<?php

namespace Modules\Web\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Services\Utils\AuthUtils;
use App\Entities\User;

class LoginController extends BaseController
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
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function showLoginForm()
    {
        return view('web::auth.login');
    }

    public function  login(Request $request) {
        $rules = [
            'email' =>'required|email',
            'password' => 'required|min:6'
        ];
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $email = $request->input('email');
            $password = $request->input('password');

            $user = User::where('email', $email)->first();
            if(!empty($user) && AuthUtils::attemptLogin($user, 'web', $email, $password, $request->has('remember_me'))){
                return redirect()->route('web.index');
            } else {
                return redirect()->back();
            }
        }
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        return redirect()->route('web.login');
    }

    protected function guard()
    {
        return Auth::guard('web');
    }
}
