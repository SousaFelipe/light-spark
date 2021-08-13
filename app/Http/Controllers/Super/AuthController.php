<?php
namespace App\Http\Controllers\Super;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

use App\Http\Controllers\Controller;
use App\Repository\UserRepository;


class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }



    public function login(Request $request)
    {
        return view('super.auth.login');
    }



    public function enter(Request $request)
    {
        $auth = false;
        $intended = URL::previous();
        $credentials = $request->only(['email', 'password']);
        $user = UserRepository::findByEmail($credentials['email']);

        if ($user) {

            if (Auth::attempt($credentials, $request->has('remember'))) {
                $auth = true;
            }
    
            if ($request->ajax()) {
                return response()->json([
                    'auth' => $auth,
                    'intended' => $intended,
                    'errors' => $auth ? [] : [__('auth.password')]
                ]);
            }
            else if ($auth) {
                return redirect()->intended(URL::route('super.admin.admin'));
            }
        }
        else return response()->json([
            'auth' => false,
            'intended' => $intended,
            'errors' => [__('auth.email')]
        ]);

        return redirect()->route('super.login');
    }



    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('super.login');
    }
}
