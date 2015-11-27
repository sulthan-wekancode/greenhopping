<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class MailTemplate extends Model{

	

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'mailtemplate';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [];

}
