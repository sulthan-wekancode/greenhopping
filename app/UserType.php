<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class UserType extends Model{

	

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'user_type';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [];

}
