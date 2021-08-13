<?php
namespace App\Http\Controllers\API\V1;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function user(Request $request)
    {
        if ($this->daniedAccess($request)) {
            return $this->unauthorized();
        }

        $user = auth()->user();

        unset($user->password);
        unset($user->created_at);
        unset($user->updated_at);
        unset($user->email_verified_at);
        unset($user->remember_token);

        return response()->json([ 'user' => $user ]);
    }



    public function csrf($json = true)
    {
        $sessionToken = $request->session()->token();
        return $json ? response()->json(['csrf' => $sessionToken]) : $sessionToken;
    }



    protected function csrfBroken($request)
    {
        $sessionToken = $request->session()->token();
        $headerToken = $request->header('X-CSRF-TOKEN');

        return (
            (is_null($sessionToken) || is_null($headerToken)) || ($sessionToken != $headerToken)
        );
    }



    protected function daniedAccess($request)
    {
        return (!$request->session()->token() || !auth() || !auth()->user());
    }



    protected function unauthorized($json = true)
    {
        return $json ? response()->json('Unauthorized', 401) : "View::";
    }



    protected static function convertRecursively($dat)
    {
        if (is_string($dat)) {
            return utf8_encode($dat);
        }
        elseif (is_array($dat)) {
            $ret = [];

            foreach ($dat as $i => $d) {
                $ret[ $i ] = self::convertRecursively($d);
            }

            return $ret;
        }
        elseif (is_object($dat)) {
            foreach ($dat as $i => $d) {
                $dat->$i = self::convertRecursively($d);
            }

            return $dat;
        }
        else {
            return $dat;
        }
    }
}
