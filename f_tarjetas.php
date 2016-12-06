<?
header("Access-Control-Allow-Origin: *");


$username = "exacomco_usar";
$password = "L?Ws3=lA9v0c";
$hostname = "localhost"; 
$_user = $_REQUEST['id'];
//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("Unable to connect to MySQL");

//select a database to work with
$selected = mysql_select_db("exacomco_app",$dbhandle);

//execute the SQL query and return records  WHERE id_user = 1
$result = mysql_query("

	SELECT * FROM app_cards
	INNER JOIN  rel_card_user
	ON app_cards.id_card = rel_card_user.id_card
	WHERE rel_card_user.id_user = '$_user' AND app_cards.activa = 1

	");

$ifind = mysql_num_rows($result);



if ($ifind>0){

while($row = mysql_fetch_array($result)){

   	$arrays[] = array('id_c'=>$row{'id_saldo'}, 'id_user'=>$row{'id_user'}, 'id_card'=>$row{'id_card'}, 'tarjeta'=>utf8_encode($row{'n_card'}), 'imagen'=>$row['img_tarjeta']);




}	


		}else{


}


echo json_encode($arrays);

?>