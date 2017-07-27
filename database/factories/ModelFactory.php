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
$factory->define(Fiscaluno\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(\Fiscaluno\Student\Student::class, function (Faker\Generator $faker) {
    return [
        'age' => $faker->numberBetween($min = 18, $max = 30),
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'gender' => $faker->name($gender =null | 'male' | 'female'),
        'nacionality' => $faker->text,
        'civilStatus' => $faker->text,
        'address' => $faker->address,
        'city' => $faker->city,
        'state' => $faker->state,
        'phone' => $faker->phoneNumber,
        'institution_id' => 1
    ];
});

$factory->define(\Fiscaluno\Institution\Institution::class, function(Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'address' => $faker->address,
        'cnpj' => $faker->numberBetween($min = 100000000, $max = 999999999),
        'email' => $faker->unique()->safeEmail,
        'website' => $faker->domainName,
        'phoneNumber' => $faker->phoneNumber,
        'imageUri' => $faker->url
    ];
})

$factory->define(\Fiscaluno\Review\GeneralReview::class, function(Faker\Generator $faker) {
    return [
        'course' => $faker->sentence($nbWords = 1, $variableNbWords = true),
        'institution_id' => 1,
        'student_id' => 1,
        'suggestion' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'rate' => $faker->numberBetween($min = 0, $max = 10),
        'pros' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'cons' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'payment' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'startYear' => $faker->date($format = 'd-m-Y', $max = 'now')
    ];
})

$factory->define(\Fiscaluno\Review\DetailedReview::class, function(Faker\Generator $faker) {
    return [
       'course' => $faker->$faker->sentence($nbWords = 1, $variableNbWords = true),
        'institution_id' => 1,
        'student_id' => 1,
        'type' => $faker->$faker->sentence($nbWords = 1, $variableNbWords = true),
        'value' => $faker->numberBetween($min = 0, $max = 10)
    ];
})