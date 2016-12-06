<?
include('config.php');
include('class.php');

$saver = new usuarios();

$optas = $_REQUEST['option'];
$listname = $_REQUEST['name'];
$tab = $_REQUEST['tabs'];

$opts = implode(',',$optas);
$tabs = implode(',',$tab);

$saver->add_group($opts, $listname, $tabs);

echo '<div class="alert alert-info" role="alert">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                <strong>Listo</strong> El Grupo '.$listname.' ha sido generado </div>';
?>
