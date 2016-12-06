<?
include('config.php');
include('class.php');

$saver = new usuarios();

$nombre = $_REQUEST['iuser'];
$app 	= $_REQUEST['app'];
$apm 	= $_REQUEST['apm'];
$user 	= $_REQUEST['user'];
$pass 	= $_REQUEST['pass'];

$saver->save_user($nombre,$app,$apm,$user,$pass);


?>