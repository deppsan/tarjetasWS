<?
include('config.php');
include('class.php');

$saver = new usuarios();


$transaction 	= $_REQUEST['mov'];
$date_t 		= $_REQUEST['fec'];
$horas_t 		= $_REQUEST['hour'];
$points 		= $_REQUEST['pts'];
$cost 			= $_REQUEST['can'];
$id_s			= $_REQUEST['id_s'];
$tipo_gasto		= $_REQUEST['tipo'];

$saver->save_transaction($transaction, $date_t, $horas_t, $points, $cost, $id_s, $tipo_gasto);


?>