<?
include('config.php');
include('class.php');

$saver = new usuarios();


$user 	= $_REQUEST['user'];
$group 	= $_REQUEST['group'];


$saver->set_homegroup($user,$group);

header('Location: ../users.php');

?>