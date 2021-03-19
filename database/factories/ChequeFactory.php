<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cheque;
use Faker\Generator as Faker;

$factory->define(Cheque::class, function (Faker $faker) {
    return [
        'foto'=> $faker->name,
        'numero'=>rand(100,300),
        'data_vencimento'=>$faker->dateTime(),
        'valor'=>rand(100,300),
        'nome_pessoa'=> $faker->name,
        'banco'=>"Bradesco",
        'recebido_de'=> $faker->name,
        'passei_para'=> $faker->name,
        'user_id'=>4,
    ];
});

       