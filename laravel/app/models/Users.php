<?php


class User extends Eloquent  {

	<?php
class Users extends Eloquent
{
	protected $table="users";
	protected $primaryKey = 'users_id';
	protected $fillable = ['user_first_name','user_last_name','user_email','user_address','user_fb_id','user_username','user_remember_token','user_access_token','user_mobile_no','password'];

	public static $rules=[
		'email'=>'required',
		'firstname'=>'required',
		'lastname'=>'required',
		'mobile_no'=>'required',
	];
	public static $rules_signup=[
		'email'=>'required|unique:users,email',
		'firstname'=>'required',
		'lastname'=>'required',
		'city'=>'required',
		'mobile_no'=>'required|numeric',
		'password'=>'required|confirmed|alpha_num|min:5',
	];

	public static $rules_login=[
		'email'=>'required',
		'password'=>'required',
	];
	public static $rules_change_password=[
		'current_password'=>'required',
		'password'=>'required|confirmed|alpha_num|min:5',
	];
	public function getUid($uid)
	{
		return DB::select('select * from users where uid=?',array($uid));
	}
	public static function  getid($email)
	{
		return DB::select('select users_id from users where email=?',array($email));
	}
	public function change_password($id)
	{
		
	}


}
}