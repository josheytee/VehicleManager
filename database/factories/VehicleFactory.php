
<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Vehicle::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'owner_id' => random_int(1, 20),
        'model' => $faker->word,
        'color' => $faker->colorName,
        'plate' => ucwords(str_random(3)) . "-" . random_int(100, 999) . "-" . ucwords(str_random(3)),
        // 'plate' => $faker->numerify("###-##-###"),
        'expires_on' => now(),
        'registered_on' => now(),
        // 'plate' => str_random(10),
    ];
});
