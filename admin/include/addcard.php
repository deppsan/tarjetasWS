<?
include('config.php');
include('class.php');

$saver = new usuarios();


$id_user 		= $_REQUEST['user'];
$id_card		= $_REQUEST['card'];
$id_subcard 	= 0;
$id_saldo 		= $_REQUEST['saldo'];

$saver->add_card($id_user, $id_card, $id_subcard, $id_saldo);

echo 'listo';
?>