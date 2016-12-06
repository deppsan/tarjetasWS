<?
header("Access-Control-Allow-Origin: *");
include('functions.php');

$username = "exacomco_usar";
$password = "L?Ws3=lA9v0c";
$hostname = "localhost"; 
//$_login = $_REQUEST['user'];
$_login = $_REQUEST['id_user'];
//connection to the database


$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("Unable to connect to MySQL");

//select a database to work with
$selected = mysql_select_db("exacomco_app",$dbhandle);

//execute the SQL query and return records
$result = mysql_query("SELECT * FROM app_users WHERE id_user = '$_login' ");

$ifind = mysql_num_rows($result);

$row = mysql_fetch_array($result);

if ($ifind>0){
//fetch tha data from the database 

$arrays = get_personalization($row{'id_user'});

	

}else{

		$arrays = array('app_imagen'=>'no','app_banner'=>'no','app_color1'=>'no','app_color2'=>'no');
}

mysql_close($dbhandle);

echo json_encode($arrays);


?>
