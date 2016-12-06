<?
header("Access-Control-Allow-Origin: *");


$username = "exacomco_usar";
$password = "L?Ws3=lA9v0c";
$hostname = "localhost"; 

$alert = $_REQUEST['id_alert'];
//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("Unable to connect to MySQL");

//select a database to work with
$selected = mysql_select_db("exacomco_app",$dbhandle);

//execute the SQL query and return records
mysql_query("UPDATE app_notifications SET a_archive = 1, a_visto = 1 WHERE id_n = '$alert'");


//select a database to work with
$selected = mysql_select_db("exacomco_app",$dbhandle);

//execute the SQL query and return records
$result = mysql_query("SELECT * FROM app_notifications WHERE id_usuario = 1 AND a_archive = 1");

$totalerts = mysql_num_rows($result);



   	$arrays = array('alerts'=>$totalerts);





mysql_close($dbhandle);

echo json_encode($arrays);


?>