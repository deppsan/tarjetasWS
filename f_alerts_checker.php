<?
header("Access-Control-Allow-Origin: *");


$username = "exacomco_usar";
$password = "L?Ws3=lA9v0c";
$hostname = "localhost"; 
$id_alert = $_REQUEST['id_alert'];
//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("Unable to connect to MySQL");

//select a database to work with
$selected = mysql_select_db("exacomco_app",$dbhandle);

//execute the SQL query and return records
$result = mysql_query("SELECT * FROM app_notifications WHERE id_n = '$id_alert'");

$resultdos = mysql_query("SELECT * FROM app_notifications WHERE id_usuario = 1 AND a_visto = 0");

$totalerts = mysql_num_rows($resultdos);



$row = mysql_fetch_array($result);




	$visto = 'balanced';


   	$arrays = array('ider'=>$row{'id_n'},'id'=>$row{'id_n'},'alertext'=>$row{'a_hora'},'content'=>utf8_encode($row{'a_notificacion'}),'icon'=>"no",'stats'=>$visto,'totalerts'=>$totalerts );


echo json_encode($arrays);

?>