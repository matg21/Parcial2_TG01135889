<?php

use Faker\Generator as Faker;
use App\Nota;

$factory->define(Nota::class, function (Faker $faker) {
    return [
        'nota1' => random_int(1,10),
            'nota2' => random_int(1,10),
            'nota3' => random_int(1,10),
            'promedio' => random_int(1,10),
            'parcial' => random_int(1,10),
            'idalumno' => random_int(1,18),
            'idcursos' => '1',
            'idprofesor' => random_int(1,18),
    ];
});
