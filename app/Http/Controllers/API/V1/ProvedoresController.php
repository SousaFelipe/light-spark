<?php
namespace App\Http\Controllers\API\V1;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Repository\Provedor\ProvedorRepository;
use App\Repository\Provedor\TokenRepository;


class ProvedoresController extends Controller
{
    public function ativos(Request $request)
    {
        return response()->json([
            'provedores' => ProvedorRepository::fetchAtivos()
        ]);
    }



    public function inativos(Request $request)
    {
        return response()->json([
            'provedores' => ProvedorRepository::fetchInativos()
        ]);
    }



    public function tokens(Request $request)
    {
        return response()->json([
            'tokens' => TokenRepository::all()
        ]);
    }
}
