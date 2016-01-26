<?php

namespace jp;

use Illuminate\Database\Eloquent\Model;

use Bican\Roles\Models\Role as RoleMaster;

class Role extends Model
{

	protected static $defatulRoleSlug = 'editor';

	protected static $rolesMeta = [
		'admin'	=> [
			'name' 			=> 'Administrador',
			'slug'			=> 'admin',
			'description'	=> 'Administrador de la Aplicacion',
		],

		'editor'	=> [
			'name'			=> 'Editor',
			'slug'			=> 'editor',
			'description'	=> 'Editor de la Aplicacion',
		],
	];




	static public function getDefaultRoleSlug()
	{
		return self::$defatulRoleSlug;
	}



	static public function getRolesMeta ()
	{
		return collect( self::$rolesMeta );
	}




    /**
     * find Role by slug
     *
     * @param roleSlug, string
     * @return role obj 
     */
    static public function getRoleBySlug ( $roleSlug )
    {
        return self::whereSlug( $roleSlug )->firstOrFail();
    }	


}
