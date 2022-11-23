<?php

namespace App\repository;

class User extends Repository{

	protected $table = 'usuarios';

	public function login ($email,$password)
	{
		$user = $this->findby($email,'email');
		if ( $user ) {
			if ($user[0]["senha"] !== $password || $user[0]["adm"] < 1) {
				return false;
			}
			$_SESSION[LOGIN] = $user[0];
			return $user[0];
		}
		return false;
	}

	public function loginUserClient ($email,$password)
	{
		$user = $this->findby($email,'email');
		if ( $user ) {
			if ($user[0]["senha"] !== $password || $user[0]["adm"] > 0) {
				return false;
			}
			$_SESSION[LOGIN] = $user[0];
			return $user[0];
		}
		return false;
	}

	public function logout()
	{
		unset($_SESSION[LOGIN]);
		$_SESSION[LOGIN] = NULL;
	}
}