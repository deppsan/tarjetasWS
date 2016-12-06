<?
header("Access-Control-Allow-Origin: *");


$user = $_REQUEST['user'];

if($user==1){

$losarrays = array('transaccion'=>'ng-show','notificacion'=>'ng-show','promocion'=>'ng-show','servicio'=>'ng-show', );
}
if($user==2){

$losarrays = array('transaccion'=>'ng-show','notificacion'=>'ng-show','promocion'=>'ng-show','servicio'=>'ng-show', );

}
if($user==12){

$losarrays = array('transaccion'=>'ng-show','notificacion'=>'ng-show','promocion'=>'ng-show','servicio'=>'ng-show', );
	
}	
echo json_encode($losarrays);


?>