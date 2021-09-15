<?php
namespace App\Http\Controllers\Super;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Repository\Provedor\ProvedorRepository;


class ProvedoresController extends Controller
{
    public function listar(Request $request)
    {
        $provedores = ProvedorRepository::all();

        return response()->json([
            'provedores' => ProvedorRepository::pullTokens($provedores)
        ]);
    }



    public function buscar(Request $request)
    {
        $provedores = ProvedorRepository::all();

        return response()->json([
            'provedor' => ProvedorRepository::pullTokens($provedores)[0]
        ]);
    }
}
