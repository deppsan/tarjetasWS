<?
header("Access-Control-Allow-Origin: *");


$username = "exacomco_usar";
$password = "L?Ws3=lA9v0c";
$hostname = "localhost"; 

$noti = $_REQUEST['notificacion'];
$date = date("Y-m-d");
$tiempo = date("Y-m-d h:i:s");
$tarjeta = $_REQUEST['id_card'];
$usuario = $_REQUEST['id_user'];
$visto = 0;



//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("Unable to connect to MySQL");

//select a database to work with
$selected = mysql_select_db("exacomco_app",$dbhandle);

//execute the SQL query and return records
mysql_query("INSERT INTO app_notifications (a_notificacion, a_fecha, a_hora, id_tarjeta, id_usuario, a_visto) VALUES('$noti','$date','$tiempo','$tarjeta','$usuario','$visto')");


echo mysql_insert_id();
/*
	
id_n
a_notificacion
a_fecha
a_hora
id_tarjeta
id_usuario
a_visto
a_orden
a_imagen
a_icon
*/
?>