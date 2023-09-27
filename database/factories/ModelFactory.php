<?php

/*
|----------------------------------------------------------------------------|
| Model Factories                                                            |
|----------------------------------------------------------------------------|
| Aquí puede definir todas sus fábricas modelo. Las fábricas modelo dan      |
| le ofrece una manera conveniente de crear modelos para probar y sembrar su |
| base de datos. Simplemente dígale a la fábrica cómo debe verse un modelo   |
| predeterminado..                                                           |
|----------------------------------------------------------------------------|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Illuminate\Support\Str;

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => Str::random(10),
    ];
});
