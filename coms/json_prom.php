


<?

$token_user = $_GET['token'];

if($token_user == '03d6607839be17dceecb8b39eeaa5b72'){

$token = md5(uniqid(rand(), true));

$promo = array(


array('id' =>0 , 'imagen' => 'img/liverpool-face.png', 'promot' => '6 meses sin Intereses. Todo el mes de Agosto.', 'items'=>'ion-bag'),
array('id' =>1 , 'imagen' => 'img/travel.jpg', 'promot' => 'De junio a agosto difiere a 12 meses sin intereses todos tus consumos en líneas áreas, llama al 01800 Banorte, o da click aquí.', 'items'=>'ion-plane'),
array('id' =>2 , 'imagen' => 'img/restaurant.png', 'promot' => 'Todos los viernes obtén puntos dobles en tus consumos en restaurantes.', 'items'=>'ion-fork'),


);
echo json_encode($promo);
}else{

	echo 'Acceso Restringido';
}
?>

