<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;
       protected $fillable = array('email','password','password_again','code','active');
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'auth';
	
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	*/
	/* Define primary key for Identifier */
	protected $primaryKey = 'ID';
	
	protected $hidden = array('password', 'remember_token');
	
	public function getAuthIdentifier(){
        return $this->getKey();
      }
	public function getAuthPassword() {
                return $this->Password;
      }
}
