<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Fornecedores;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Fornecedores::class, function (Faker $faker) {
    return [
    'nome ' => $faker->name,
    'CNPJ' => $faker->name->unique(),
    'telefone' => $faker->name,
    'celular' => $faker->name,
    'endereco' => $faker->name,
    'numero' => $faker->name,
    'cidade' => $faker->name,
    'estado' => $faker->name,
    ];
});
