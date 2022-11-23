<?php

function password_encripty($password)
{
    return password_hash($password,PASSWORD_DEFAULT);
}

function password_verify_encripty($password,$hash)
{
    if (password_verify($password,$hash)) {return true;}
    return false;
}