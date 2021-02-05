<?php
// require_once realpath(__DIR__ . "../vendor/autoload.php");
// use Dotenv\Dotenv;
// $dotenv - Dotenv::createImmutable(__DIR__) ;
// $dotenv->load();

$dbURL = "mysql://b6ce1ed0c7dc80:b290b23e@us-cdbr-east-03.cleardb.com/heroku_e65ec5c653131de?reconnect=true";
//  $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
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
