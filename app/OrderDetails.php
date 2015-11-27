<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class OrderDetails extends Model{

	

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'order_details';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [];

}
