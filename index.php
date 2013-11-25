<?php
session_start();

//Si ya esta logueado
if (isset($_SESSION['id'])) {
    header("location: inicio.php");
}

if (array_key_exists("login", $_GET)) {
    $oauth_provider = $_GET['oauth_provider'];
    if ($oauth_provider == 'twitter') {
        header("Location: login-twitter.php");
    } else if ($oauth_provider == 'facebook') {
        header("Location: login-facebook.php");
    }
}
?>
<title>Facebook | Twitter Login</title>
<style type="text/css">
    #buttons
	{
	text-align:center
	}
    #buttons img,
    #buttons a img
    { border: none;}
	h1
	{
	font-family:Arial, Helvetica, sans-serif;
	color:#999999;
	}
	
</style>



<div id="buttons">
<h1>Twitter Facebook Login </h1>
    <a href="?login&oauth_provider=twitter">Twitter</a>&nbsp;&nbsp;&nbsp;
    <a href="?login&oauth_provider=facebook">Facebook</a> <br />
	<br />
</div>
