<?
header("Access-Control-Allow-Origin: *");

include('config.php');
include('class.php');

$saver = new usuarios();

$lista = $_REQUEST['list'];
$user = $_REQUEST['id_user'];

//$color = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
$color = $_REQUEST['color'];

$saver-> add_list($lista, $user,$color);

/*echo '<div class="alert alert-info" role="alert">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                <strong>Listo</strong> El Grupo '.$listname.' ha sido generado </div>';*/
?>
