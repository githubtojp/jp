<?php

use Illuminate\Database\Seeder;

class RolePermissionAndStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /**
         * Roles
         * Administrator, Editor
         */
        factory( Bican\Roles\Models\Role::class )->create([
            'name'          => jp\Role::getRolesMeta()->get('admin')['name'],
            'slug'          => jp\Role::getRolesMeta()->get('admin')['slug'],
            'description'   => jp\Role::getRolesMeta()->get('admin')['description'],            
            'level'         => 1,
        ]);
        

        factory( Bican\Roles\Models\Role::class )->create([
            'name'          => jp\Role::getRolesMeta()->get('editor')['name'],
            'slug'          => jp\Role::getRolesMeta()->get('editor')['slug'],
            'description'   => jp\Role::getRolesMeta()->get('editor')['description'],           
            'level'         => 1,
        ]);



        /**
         * Status
         * active, pending, block, published, draft
         */

        
        factory( jp\Status::class )->create([
            'name'          => jp\Status::getStatusMeta()->get('active')['name'],
            'slug'          => jp\Status::getStatusMeta()->get('active')['slug'],
            'description'   => jp\Status::getStatusMeta()->get('active')['description'],
        ]);


        factory( jp\Status::class )->create([
            'name'          => jp\Status::getStatusMeta()->get('pending')['name'],
            'slug'          => jp\Status::getStatusMeta()->get('pending')['slug'],
            'description'   => jp\Status::getStatusMeta()->get('pending')['description'],
        ]);     


        factory( jp\Status::class )->create([
            'name'          => jp\Status::getStatusMeta()->get('block')['name'],
            'slug'          => jp\Status::getStatusMeta()->get('block')['slug'],
            'description'   => jp\Status::getStatusMeta()->get('block')['description'],
        ]);             

        factory( jp\Status::class )->create([
            'name'          => jp\Status::getStatusMeta()->get('published')['name'],
            'slug'          => jp\Status::getStatusMeta()->get('published')['slug'],
            'description'   => jp\Status::getStatusMeta()->get('published')['description'],
        ]);     


        factory( jp\Status::class )->create([
            'name'          => jp\Status::getStatusMeta()->get('draft')['name'],
            'slug'          => jp\Status::getStatusMeta()->get('draft')['slug'],
            'description'   => jp\Status::getStatusMeta()->get('draft')['description'],
        ]);  
		  	    	

    }
}
