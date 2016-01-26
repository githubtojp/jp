<?php

namespace jp;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{

	protected $table = "status";

	protected $fillable = ['name', 'slug', 'description'];

	protected static $statusMeta = [
		'active' => [
			'name'			=> 'Activo',
			'slug'			=> 'active',
			'description'	=> '',
		],

		'pending'	=> [
			'name'			=> 'Pendiente',
			'slug'			=> 'pending',
			'description'	=> 'Esperando Confirmacion del Administrador',
		],

		'block' 	=> [
			'name'			=> 'Bloqueado',
			'slug'			=> 'block',
			'description'	=> 'Bloqueado por el administrador',
		],

		'published' 	=> [
			'name'			=> 'Publicado',
			'slug'			=> 'published',
			'description'	=> '',
		],


		'draft'			=> [
			'name'			=> 'Borrador',
			'slug'			=> 'draft',
			'description'	=> 'Borrador, sin publicar',
		],	
	];


	protected static $defaultStatusSlug = 'pending';



	static public function getDefaultStatusSlug()
	{
		return self::$defaultStatusSlug;
	}


	static public function getStatusMeta()
	{
		return collect( self::$statusMeta );
	}


    /**
     * find Status by slug
     *
     * @param slugStatus, string
     * @return jp\Status instance 
     */
    static public function getStatusBySlug ( $slugStatus )
    {
        return self::whereSlug( $slugStatus )->firstOrFail();
    }	







	/**
	 * 	Model Relationships
	 *	User, Articles
	 */

	public function users ()
	{
		return $this->hasMany(jp\User::class);
	}




}
