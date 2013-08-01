<?php

function mysqlconnect(){
	mysql_connect("tubdub.db.4477134.hostedresource.com", "tubdub", "Goda07yo!") or die(mysql_error());
	mysql_select_db("tubdub") or die(mysql_error());
}

function checkuserexists($email){
	global $userexists;

	$result = mysql_query("SELECT * FROM users WHERE email='$email'") or die(mysql_error());  
	$numrows = mysql_num_rows($result);
	if ($numrows==0){
		$userexists = 0;
	} else {
		$userexists = 1;
	}
}

function adduser($email,$hash){
	mysql_query("INSERT INTO users (email, hash) VALUES('$email', '$hash') ") or die(mysql_error());  
}

function checklogin($email,$hash){
	global $loginsuccess;

	$result = mysql_query("SELECT * FROM users WHERE email='$email' AND hash='$hash'") or die(mysql_error());  
	$numrows = mysql_num_rows($result);
	if ($numrows==0){
		$loginsuccess = 0;
	} else {
		$loginsuccess = 1;
	}

}


?>