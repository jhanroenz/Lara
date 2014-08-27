<?php
class Transaction extends Eloquent {

	protected $fillable = array('student_id','debit','credit','created_at');
	
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'transactions';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	
}
