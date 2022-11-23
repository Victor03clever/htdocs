<?php

function logged()
{
	if (!$_SESSION[AUTH_SESSION_KEY] || !isset($_SESSION[AUTH_SESSION_KEY])) {
		return redirect(BASE_URL);
	}
}

function verifyAuth()
{
	if (isset($_SESSION[AUTH_SESSION_KEY])) {
		return redirect('home');
	}	
}