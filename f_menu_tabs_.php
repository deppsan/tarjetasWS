<?
header("Access-Control-Allow-Origin: *");


$username = "exacomco_usar";
$password = "L?Ws3=lA9v0c";
$hostname = "localhost"; 





function available_tabs($arrays){

$arra = explode(',',$arrays);

$result = mysql_query("SELECT * FROM app_tabs ");

while ($roww = mysql_fetch_array($result)){





if (in_array($roww['id_t'], $arra)) {
   
   	$arrs = 'ng-show';

}else{

	$arrs = 'ng-hide';

	}

$arrayz[] = array($roww['tab_name']=>$arrs);



}

echo json_encode($arrayz);

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


$row = mysql_fetch_array($result);




available_tabs($row['opt_tabs']);

	

mysql_close($dbhandle);


?>