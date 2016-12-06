<?
header("Access-Control-Allow-Origin: *");


$username = "exacomco_usar";
$password = "L?Ws3=lA9v0c";
$hostname = "localhost"; 


//---- funcion

function name_menu($names){


//$optionx = implode(',',$option_array);

$result = mysql_query("SELECT * FROM app_home WHERE id_o = '$names' ");

$row = mysql_fetch_array($result);

return array('menu_title'=>$row['Opcion'], 'webicon'=>$row['webicon'], 'ion_icon'=>$row['ion_icon'],'ui_sref'=>$row['ui_sref'],'badges'=>$row['badges']);


}
//------------------


$user = $_REQUEST['user'];
//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("Unable to connect to MySQL");

//select a database to work with
$selected = mysql_select_db("exacomco_app",$dbhandle);

//execute the SQL query and return records
$result = mysql_query("SELECT * FROM app_users 
						INNER JOIN app_home_options
						ON app_users.id_group = app_home_options.id_g 
						WHERE id_user = '$user' ");


while($row = mysql_fetch_array($result)){


$opts = explode(',',$row['opciones']);
	

for($i=0; $i<count($opts); $i++){

$menues[] = name_menu($opts[$i]);

}

}

mysql_close($dbhandle);

echo json_encode($menues);

?>