<?
header("Access-Control-Allow-Origin: *");


$username = "exacomco_usar";
$password = "L?Ws3=lA9v0c";
$hostname = "localhost"; 
$idsaldo = $_REQUEST['id_s'];
$user = $_REQUEST['id_user'];
//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("Unable to connect to MySQL");

//select a database to work with
$selected = mysql_select_db("exacomco_app",$dbhandle);

//execute the SQL query and return records  WHERE id_user = 1
$result = mysql_query("SELECT * FROM app_transactions
	INNER JOIN rel_card_user
	ON app_transactions.id_s = rel_card_user.id_saldo
	WHERE id_s LIKE '$idsaldo'" );

$ifind = mysql_num_rows($result);



if ($ifind>0){

while($row = mysql_fetch_array($result)){
//fetch tha data from the database 

if(!empty($row['flagged'])){

	$showhide='';
}else{

	$showhide='ng-hide';
}


if($row{'tipo_gasto'}==1){

	$colors='assertive';
	$puntos = '';
	$sign = "-";
}else{

	$colors='';
	$puntos='+'.$row['points'].' Puntos';
	$sign = "";
}

   	$arrays[] = array('id_t'=>$row{'id_t'}, 'transaccion'=>$row{'transaction'}, 'fecha'=>$row{'date_t'}, 'hora'=>$row{'horas_t'}, 'puntos'=>$puntos,'colors'=>$colors,'signo'=>$sign, 'costo'=>$row{'cost'}, 'flag'=>$row{'flagged'},'flagin'=>$showhide);




}	


		}else{


}
//close the connection


//print_r($arrays);

echo json_encode($arrays);

?>