<?php
$dbURL = "mysql://b6ce1ed0c7dc80:b290b23e@us-cdbr-east-03.cleardb.com/heroku_e65ec5c653131de?reconnect=true";
$url = parse_url($dbURL);

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$con = mysqli_connect($server,$username,$password,$db);

if(!$con)
{
	die("failed to connect!");
}
