<?php
use App\utils\Resources;
use App\utils\Flash;

function logged()
{
	if (!$_SESSION[LOGIN] || !isset($_SESSION[LOGIN])) {
		return Resources::redirect("/".APP_NAME."/login");
	}
}

function verifyAuth()
{
	if (isset($_SESSION[LOGIN])) {
		return Resources::redirect('/'.APP_NAME.'/admin/home');
	}	
}

function setFlash(string $index, $message) {
	Flash::setFlash($index,$message);
}

function getFlash(string $index, string $style = "color: red") {
	Flash::getFlash($index,$style);
}

function getUser()
{
	return $_SESSION[LOGIN];
}

function assets(string $fileName)
{
	$file = dirname(__DIR__,2)."/public/".$fileName;
	//var_dump(URL_BASE);
	if (file_exists($file)) {
		return URL_BASE."/public/".$fileName;
	}
}

function redirectTo($to){
	return Resources::redirect('/'.APP_NAME.$to);
}