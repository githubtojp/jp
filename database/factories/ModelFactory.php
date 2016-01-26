<?php

$factory->define(jp\User::class, function ( $faker ) {
    return [
        'name' 				=> $faker->name,
        'email' 			=> $faker->email,
        'password' 			=> bcrypt('jptest'),
        'remember_token' 	=> str_random(10),
        'status_id'			=> $faker->numberBetween(1,3),
    ];
});


$factory->define( Bican\Roles\Models\Role::class, function ( $faker ){

	return [
		'name'			=> 'Editor',
		'slug'			=> 'editor',
		'description'	=> 'App Editor',
		'level'			=> 1,
	];

});


$factory->define( jp\Status::class , function( $faker ){

	return [
		'name'			=> 'Editor',
		'slug'			=> 'editor',
		'description'	=> 'App Editor',
	];

});