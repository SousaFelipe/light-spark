<?php
namespace App\Repository\Provedor;


use App\Repository\Repository;
use App\Models\Provedor\Provedor;

use App\Repository\Provedor\TokenRepository;


class ProvedorRepository extends Repository
{
    public static function all()
    {
        return self::bind(Provedor::class)->all();
    }


    public static function fetchAtivos()
    {
        return self::bind(Provedor::class)
            ->where('ativo', 'S')
            ->get();
    }


    public static function fetchInativos()
    {
        return self::bind(Provedor::class)
            ->where('ativo', 'N')
            ->get();
    }


    public static function fetchByColaborador($provedorID, $colaboradorID)
    {
        return self::bind(Provedor::class)
            ->where('provedor', $provedorID)
            ->where('colaborador', $colaboradorID)
            ->get();
    }


    public static function pushTokens($provedores)
    {
        foreach ($provedores as $provedor) {
            $provedor['tokens'] = TokenRepository::fetchByProvedor($provedor->id);
        }

        return $provedores;
    }
}
