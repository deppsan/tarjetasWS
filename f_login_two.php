<?
header("Access-Control-Allow-Origin: *");

include('functions.php');


$passwo 	= 	$_REQUEST['pass'];
$usernamex 	= 	$_REQUEST['username'];

$pass= md5($passwo);

//---------------------------------funciones
function set_token($token,$user,$servername,$username,$password,$dbname){

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE app_users SET app_token = '$token' WHERE id_user = '$user'  ";

if ($conn->query($sql) === TRUE) {
   // echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


}


$username = "exacomco_usar";
$password = "L?Ws3=lA9v0c";
$hostname = "localhost"; 

$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("Unable to connect to MySQL");
//echo "Connected to MySQL<br>";

$selected = mysql_select_db("exacomco_app",$dbhandle) 
  or die("Could not select examples");

$result = mysql_query("SELECT * FROM app_users WHERE app_password = '$pass' AND app_username='$usernamex' ");

$row = mysql_fetch_array($result);

$ifind = mysql_num_rows($result);

if($ifind>0){

$token = md5($row{'app_username'}.'[+]'.date('m-d-Y i').'[+]'.rand(0,100000));


   $arrays = array('autho'=>1, 'token'=>$token, 'app'=>$row{'app_apellidop'}, 'apm'=>$row{'app_apellidom'}, 'nombre'=>$row{'app_nombre'}, 'acces_alert'=>'Bienvenido '.$row{'app_nombre'},'id_user'=>$row{'id_user'},'personalization'=>get_personalization($row{'id_user'}));



   set_token($token,$row{'id_user'},'localhost',$username,$password,'exacomco_app');

}else{

   $arrays = array('autho'=>0, 'token'=>$token, 'app'=>$row{'app_apellidop'}, 'apm'=>$row{'app_apellidom'}, 'nombre'=>$row{'app_nombre'}, 'acces_alert'=>'Contraseña incorrecta','id_user'=>$row{'id_user'});


}

mysql_close($dbhandle);

echo json_encode($arrays);

?>
