<?php

namespace App\utils;

class Flash
{
	public static function setFlash($index, $message)
	{
	    if(!isset($_SESSION['flash'][$index])){
	        $_SESSION['flash'][$index] = $message; 
	    }
	}

	public static function getFlash(string $index, string $style='color:red')
	{
	    if(isset($_SESSION['flash'][$index])){
	        $flash = $_SESSION['flash'][$index];
	        echo "<span style='{$style}'>{$flash}</span>";
	        unset($_SESSION['flash'][$index]);
	    }
	}
}
