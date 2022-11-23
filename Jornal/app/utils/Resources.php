<?php

namespace App\utils;

class Resources
{

	public static function view(string $view, array $data = [])
	{
		extract($data);
		$file = dirname(__DIR__,1)."/views/".$view.".php";
		if (file_exists($file)) {
			require_once $file;
		}
	}

	public static function redirect(string $to)
	{
		return header('Location: '.$to);
	}

	public static function redirectWithMessage(string $index, string $message, string $redirectTo)
	{
		Flash::setFlash($index,$message);
    	return static::redirect($redirectTo);
	}
}
