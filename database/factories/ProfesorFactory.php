<?php

use Faker\Generator as Faker;
use App\Profesor;

$factory->define(Profesor::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'apellido' => str_random(10),
        'dui' => random_int(1000000, 999999999),
        'telefono' => random_int(1000000, 999999999),
        'email' => str_random(10).'@gmail.com',
        'clave' => bcrypt('password'), 
    ];
});
