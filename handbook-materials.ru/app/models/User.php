<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

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
        
	protected $fillable = array('email', 'password', 'role', 'fio', 'org_name', 'ur_address', 'fa_address', 'inn', 'phone');
	
	public static $validation = array(
		'email'     => 'required|email|unique:users',
	);
	
	public function register() {
		$this->password = Hash::make($this->password);
		$this->activationCode = Str::random();
		$this->isActive = true;
		$this->role = "user";
		$this->save();

		return $this->id;
	}
}
