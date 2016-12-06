<?
$username = "exacomco_usar";
$password = "L?Ws3=lA9v0c";
$hostname = "localhost"; 
$panel_title = "DWH EXPERTS";
define("NOMBRE", "app_nombre");
define("AMATERNO", "app_apellidop");
define("APATERNO", "app_apellidom");
define("EMAIL", "app_email");
define("PASS", "app_password");

$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("Unable to connect to MySQL");

//select a database to work with
$selected = mysql_select_db("exacomco_app",$dbhandle);
?>