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


function  get_total_cats($cat){


$resulta2 = mysql_query("SELECT * FROM app_transactions WHERE clasificacion = '$cat'" );

$totales = mysql_num_rows($resulta2);

return $totales;

}


//execute the SQL query and return records  WHERE id_user = 1
$result = mysql_query("SELECT * FROM app_transactions
	INNER JOIN rel_card_user
	ON app_transactions.id_s = rel_card_user.id_saldo
	INNER JOIN app_clasificaciones
	ON app_transactions.clasificacion = app_clasificaciones.id_c
	WHERE id_s LIKE '$idsaldo'
	GROUP BY app_clasificaciones.clasificacion
	" );

$totals = mysql_num_rows($result);


while($row = mysql_fetch_array($result)){
//fetch tha data from the database 
$catz = $row['id_c'];

$clases[] =  $row['clasificacion'];
$totalx[] = get_total_cats($catz);
$colores[] = $row['color'];
}	

$charts = array('clases'=>$clases, 'totales'=>$totalx, 'colores'=>$colores);

//print_r($arrays);

echo json_encode($charts);

?>