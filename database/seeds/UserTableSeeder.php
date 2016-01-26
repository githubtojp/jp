<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(jp\User::class)->create([
		
        	'name' 	         => 'Manuel',
			'email'	         => 'jp@admin.com',
			'password'       => bcrypt('jpadmin'),
            'status_id'      => 1,          
        
        ])->attachRole(1);


        // $admin = jp\User::find(1);
        // $admin->status_id = 1;


        factory( jp\User::class, 10 )->create()->each( function( $u, $key){

            $u->attachRole(2);

        }); 

    }
}
