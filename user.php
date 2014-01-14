<?php

require_once __DIR__.'/config.php';

function checkUser($username) {
    global $mysql;

    $username = mysql_escape_string($username);
    $query = mysql_query("SELECT * FROM admin WHERE admin = '$username'");

    return mysql_num_rows($query) > 0 ? true : false;
}


function getUser($username){
	global $mysql;
	
	$username = mysql_escape_string($username);
	$tabel = mysql_query("SELECT * FROM admin WHERE username = '$username'");
	$result = mysql_fetch_assoc($tabel);
	return $result;
}

function prosesLogin($username,$password){
	global $mysql;
	
	$username = mysql_escape_string($username);
	$password = mysql_escape_string($password);
	$tabel = mysql_query("SELECT * FROM admin");
	$cek = false;
	
	while ( ($data = mysql_fetch_array($tabel)) && (!$cek) )
		{
			if ($_POST["username"] == $data["username"] && $_POST["password"] == $data["password"] )
			{
			session_start();
			$_SESSION["status"] = 1 ;
			$_SESSION["username"] = $data["username"];
			$cek = true;
			}
		}
		
	if ($cek)
		header("location:Homepage.php");
	else 
		header("location:login.php?salah=true");
		
}

function directedLogin($username,$password,$x){
	global $mysql;
	
	$username = mysql_escape_string($username);
	$password = mysql_escape_string($password);
	$tabel = mysql_query("SELECT * FROM admin");
	$cek = false;
	
	while ( ($data = mysql_fetch_array($tabel)) && (!$cek) )
		{
			if ($_POST["username"] == $data["username"] && $_POST["password"] == $data["password"] )
			{
			session_start();
			$_SESSION["status"] = 1 ;
			$_SESSION["username"] = $data["username"];
			$cek = true;
			}
		}
		
	if ($cek)
		header("location:$x");
	else 
		header("location:login.php?salah=true");
		
}

?>
