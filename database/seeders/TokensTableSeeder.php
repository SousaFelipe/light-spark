<?php
namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TokensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tokens')->insert([
            'id'            => 1,
            'provedor'      => 1,
            'token'         => '6:d94f8ccff332c49a266088ea3e0afaa2bdac77157bc4c698d7ab7e35971192bd',
            'data_cadastro' => '2021-09-11',
        ]);
    }
}
