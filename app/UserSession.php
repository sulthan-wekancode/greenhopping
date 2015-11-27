<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class UserSession extends Model{

	

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'user_session';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [];

}
