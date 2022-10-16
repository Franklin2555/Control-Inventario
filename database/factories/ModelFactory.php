<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Brackets\AdminAuth\Models\AdminUser::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'password' => bcrypt($faker->password),
        'remember_token' => null,
        'activated' => true,
        'forbidden' => $faker->boolean(),
        'language' => 'en',
        'deleted_at' => null,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        'last_login_at' => $faker->dateTime,
        
    ];
});/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Categorium::class, static function (Faker\Generator $faker) {
    return [
        'categoria' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Inventario::class, static function (Faker\Generator $faker) {
    return [
        'producto' => $faker->sentence,
        'cantidad' => $faker->sentence,
        'precio' => $faker->randomFloat,
        'unidades' => $faker->sentence,
        'costo' => $faker->randomFloat,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Producto::class, static function (Faker\Generator $faker) {
    return [
        'producto' => $faker->sentence,
        'tiempo' => $faker->sentence,
        'precio' => $faker->randomFloat,
        'categoria_id' => $faker->randomNumber(5),
        'inventario_id' => $faker->randomNumber(5),
        'ventas_id' => $faker->randomNumber(5),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Venta::class, static function (Faker\Generator $faker) {
    return [
        'producto' => $faker->sentence,
        'cantidad' => $faker->sentence,
        'precio' => $faker->randomFloat,
        'total_venta' => $faker->sentence,
        'fecha_venta' => $faker->date(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Producto::class, static function (Faker\Generator $faker) {
    return [
        'producto' => $faker->sentence,
        'tiempo' => $faker->sentence,
        'precio' => $faker->randomFloat,
        'categoria_id' => $faker->randomNumber(5),
        'inventario_id' => $faker->randomNumber(5),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Venta::class, static function (Faker\Generator $faker) {
    return [
        'producto' => $faker->sentence,
        'cantidad' => $faker->sentence,
        'precio' => $faker->randomFloat,
        'total_venta' => $faker->sentence,
        'fecha_venta' => $faker->date(),
        'producto_id' => $faker->randomNumber(5),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
