<?php


function setFlash($index, $message)
{
    if(!isset($_SESSION['flash'][$index])){
        $_SESSION['flash'][$index] = $message; 
    }
}

function getFlash(string $index)
{
    if(isset($_SESSION['flash'][$index])){
        $flash = $_SESSION['flash'][$index];
        echo $flash;
        unset($_SESSION['flash'][$index]);
    }
}