<?
header("Access-Control-Allow-Origin: *");

$username = "exacomco_usar";
$password = "L?Ws3=lA9v0c";
$hostname = "localhost"; 
$user = $_REQUEST['id_user'];
//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("Unable to connect to MySQL");

//select a database to work with
$selected = mysql_select_db("exacomco_app",$dbhandle);

//execute the SQL query and return records
$result = mysql_query("SELECT * FROM app_clasificaciones WHERE user_id = '$user' ");

$total = mysql_num_rows($result);

if ($total>0){

while($row = mysql_fetch_array($result)){

$lists .= '<ion-radio ng-model="lista.uno"  id="r_'.$row['id_c'].'" ng-value="\''.$row['id_c'].','.$row['color'].'\'"><i class="icon ion-record" style="color:'.$row['color'].';"></i> '.$row['clasificacion'].'</ion-radio>';
//$lists .='<ion-checkbox ng-value="\''.$row['id_c'].'\'"  ng-model="isChecked_'.$row['id_c'].'">'.$row['clasificacion'].'</ion-checkbox>';

}

}else{

$lists = '<ion-radio ng-model="lista.uno" ng-value="\'0\'"><i class="icon ion-wand"></i>Principal</ion-radio>';


}



mysql_close($dbhandle);

echo $lists;

?>


