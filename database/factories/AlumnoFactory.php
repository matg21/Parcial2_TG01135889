<?php

use Faker\Generator as Faker;
use App\Alumno;

$factory->define(Alumno::class, function (Faker $faker) {
    
    return [
        'nombre' =>$faker->name, //nombre = sbnjdbsjdbssd
            'apellido' => str_random(10), //apellido = jcjczxbcjznxczx
            'fechanacimiento' => '2021-09-19',
            'direccion' => 'San Salvador',
            'genero' => str_random(1),
            'telefono' => random_int(1000000, 999999999),
            'correo' => str_random(10).'@gmail.com',
            'clave' =>  bcrypt('password'), 
    ];
});
