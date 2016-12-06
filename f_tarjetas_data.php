<?
header("Access-Control-Allow-Origin: *");


$username = "exacomco_usar";
$password = "L?Ws3=lA9v0c";
$hostname = "localhost"; 
$idsaldo = $_REQUEST['id_s'];
//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("Unable to connect to MySQL");

//select a database to work with
$selected = mysql_select_db("exacomco_app",$dbhandle);

//execute the SQL query and return records  WHERE id_user = 1
$result = mysql_query("SELECT * FROM app_saldos
	INNER JOIN rel_card_user
	ON app_saldos.id_s = rel_card_user.id_saldo
	INNER JOIN 	app_cards 
	ON rel_card_user.id_card = app_cards.id_card
	WHERE id_s = '$idsaldo'");

$ifind = mysql_num_rows($result);



if ($ifind>0){

while($row = mysql_fetch_array($result)){
//fetch tha data from the database 

   	$arrays[] = array('id_c'=>$row{'id_saldo'}, 'id_user'=>$row{'id_user'}, 'id_card'=>$row{'id_card'}, 'tarjeta'=>utf8_encode($row{'n_card'}), 'imagen'=>$row['img_tarjeta'],'Saldo'=>$row['saldoalcorte'],'Lcredito'=>$row['credit_line'],'Sdisponible'=>$row['creditodisp']);




}	


		}else{


}
//close the connection


//print_r($arrays);

echo json_encode($arrays);

?>