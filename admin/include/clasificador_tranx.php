<?
header("Access-Control-Allow-Origin: *");

include('config.php');
include('class.php');

$saver = new usuarios();

$class = $_REQUEST['class'];
$trax = $_REQUEST['trax'];


$saver->  classify($class,$trax);

/*echo '<div class="alert alert-info" role="alert">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                <strong>Listo</strong> El Grupo '.$listname.' ha sido generado </div>';*/
?>
