<?php

$name="localhost";
$user="root";
$pass="";
$connect=mysql_connect($name,$user,$pass) or die(mysql_error());
$db="mlogin";
if($connect)
{
  $db=mysql_select_db($db) or die(mysql_error());
  if($db)
  {
    //echo 'database connect';

  }
  else
  {
    //echo 'database canot connect, please try again.....';
  }

}

?>
