<?php

if(isset($_POST['user']) && isset($_POST['pass']))
{
	session_start();
	$_SESSION['user']=$_POST['user'];
	//create session for user
}
?>