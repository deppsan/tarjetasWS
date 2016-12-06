<?
header("Access-Control-Allow-Origin: *");


$username = "exacomco_usar";
$password = "L?Ws3=lA9v0c";
$hostname = "localhost"; 
//$_login = $_REQUEST['user'];
$_login = $_REQUEST['user'];
//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("Unable to connect to MySQL");

//select a database to work with
$selected = mysql_select_db("exacomco_app",$dbhandle);

//execute the SQL query and return records
$result = mysql_query("SELECT * FROM app_users WHERE app_username = '$_login' ");

$ifind = mysql_num_rows($result);

$row = mysql_fetch_array($result);

if ($ifind>0){
//fetch tha data from the database 

   	$arrays = array('autho'=>1, 'palabra'=>$row{'app_word'}, 'acces_alert'=>'Bienvenido '. $row['app_nombre']);

	

}else{

		$arrays = array('autho'=>0, 'palabra'=>$row{'app_word'}, 'acces_alert' => 'El usuario no existe');
}

//close the connection

mysql_close($dbhandle);

echo json_encode($arrays);


?>