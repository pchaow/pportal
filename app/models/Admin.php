<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Admin extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'admins';
	protected $fillable = ['username', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

    public function getRememberToken()
    {
        //return $this->remember_token;
        return null;
    }

    public function setRememberToken($value)
    {
        //$this->remember_token = $value;
    }

    public function getRememberTokenName()
    {
        //return 'remember_token';
        return null;
    }

    public function setAttribute($key,$value){
        return null;
    }

    /*
     * protected $fillable = array('username', 'password');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 *//*
        protected $hidden = array('password', 'remember_token');
     * */

}