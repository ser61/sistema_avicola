<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(sisAvicola\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(sisAvicola\Persona::class, function (Faker\Generator $fake) {
  $faker = \Faker\Factory::create('es_ES');
  return [
    'ci' => $faker->numberBetween(10000000,99999999),
    'nombre' => $faker->name,
    'apellido' => $faker->lastName,
    'foto' => 'user.png',
    'fechaIngreso' => null,
    'direccion' => $faker->address,
    'idCargo' => sisAvicola\Models\seguridad\Cargo::all()->random()->id,
    'tipo' => 'e',
    'idEmpresa' => '123456',
    'visible' => '1'
  ];
});
