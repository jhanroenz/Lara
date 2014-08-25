<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $fillable = array('email','username','password','firstname','middlename','lastname','course','year','password_temp','code', 'type' , 'active');
	
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function getRememberToken()
	{
    	return $this->remember_token;
	}

	public function setRememberToken($value)
	{
    	$this->remember_token = $value;
	}

	public function getRememberTokenName()
	{
    	return 'remember_token';
	}
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}
	/**
	* Get the password for the user
	**/
	public function getAuthPassword()
	{
		return $this->password;
	}
}
