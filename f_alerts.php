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
$result = mysql_query("SELECT * FROM app_notifications WHERE id_usuario = 1 AND a_archive NOT LIKE 1 ORDER BY id_n ASC");

$ifind = mysql_num_rows($result);

$i = '';

if ($ifind>0){

while($row = mysql_fetch_array($result)){

$i++;

if($row{'a_visto'}==0){

	$visto = 'balanced';

}else{

	$visto = 'viewed';
}

   	$arrays[] = array('sorter'=>$i,'ider'=>$row{'id_n'},'id'=>$row{'id_n'},'alertext'=>$row{'a_hora'},'content'=>utf8_encode($row{'a_notificacion'}),'icon'=>"no",'stats'=>$visto );



//,icon:"no",stats:"viewed",ider:"0" },
}	


		}else{


}
mysql_close($dbhandle);

echo json_encode($arrays);

/*session_start();
$_login = $_REQUEST['user'];

$usuarios = array(

'Adelgado2016',
'Usuario2016',
'User2016',
'Iaguilar2015'
	);


if (in_array($_login, $usuarios)) {	

$tokken = md5($_login.'[+]'.date('m-d-Y i').'[+]'.rand(0,100000));
	
$arrays = array('autho'=>1, 'tokken'=>$tokken, 'acces_alert'=>'bienvenido Adrian','id_user'=>10);

}else{
	
$arrays = array('autho'=>0, 'token'=>$tokken, 'acces_alert'=>'Este usuario no se encuentra registrado','id_user'=>0);

}

echo json_encode($arrays);
*/
?>