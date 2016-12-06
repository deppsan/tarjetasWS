<?
header("Access-Control-Allow-Origin: *");


$username = "exacomco_usar";
$password = "L?Ws3=lA9v0c";
$hostname = "localhost"; 
$_user = $_REQUEST['id_user'];
//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("Unable to connect to MySQL");

//select a database to work with
$selected = mysql_select_db("exacomco_app",$dbhandle);

//execute the SQL query and return records
$result = mysql_query("SELECT * FROM app_notifications WHERE id_usuario = 1 AND a_visto = 0");

$totalerts = mysql_num_rows($result);



   	$arrays = array('alerts'=>$totalerts);





mysql_close($dbhandle);

echo json_encode($arrays);

?>