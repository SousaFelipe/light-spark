<?php
namespace App\Repository\Provedor;


use App\Repository\Repository;
use App\Models\Provedor\Token;


class TokenRepository extends Repository
{
    public static function all()
    {
        return self::bind(Token::class)->all();
    }


    public static function fetchAtivos()
    {
        return self::bind(Token::class)
            ->where('ativo', 'S')
            ->get();
    }


    public static function fetchInativos()
    {
        return self::bind(Token::class)
            ->where('ativo', 'N')
            ->get();
    }


    public static function fetchByProvedor($provedor_id)
    {
        $instance = self::bind(Token::class);

        return [
            'ativos' => $instance->where('provedor', $provedor_id)->where('ativo', 'S')->get(),
            'inativos' => $instance->where('provedor', $provedor_id)->where('ativo', 'N')->get()
        ];
    }
}
