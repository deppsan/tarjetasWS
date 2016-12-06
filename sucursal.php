<?
header("Access-Control-Allow-Origin: *");


$datos = array(
	'title' => 'Sucursal tal', 
	'titulo' => 'Sucursal tal', 
	'latitud' => 25.6404596, 
	'longitud' => -100.3154511, 
	'imagen'=>'http://iconshow.me/media/images/ui/free-vector-icons/png/32/location-alt.png.png',
	'Horario'=>'Abierto de 09:00am a 02:00 pm',
	'dias'=>'Lun a Vie');
      


echo json_encode($datos);


?>
