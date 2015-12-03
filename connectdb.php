<?php

$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'root';
$db_name = 'chatproject';

if($connection = mysql_connect($db_host,$db_user,$db_pass))
{
    $feedback[] = 'connected to db'.'</br>';
    if($database = mysql_select_db($db_name,$connection))
    {
         $feedback[]= 'database has been selected'.'</br>';       
    }
    else
    {
         $feedback[]= 'database was not found'.'</br>';
    }
}
else
{
    $feedback[]= 'unable to connect to database'.'</br>';
}

