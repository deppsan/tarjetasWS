<?
include('config.php');
include('class.php');

$saver = new usuarios();


$credit_line 	= $_REQUEST['cline'];
$id_subcard 	= $_REQUEST['id_subcard'];


$saver->add_sub_card($credit_line,$id_subcard);

echo "done";

?>