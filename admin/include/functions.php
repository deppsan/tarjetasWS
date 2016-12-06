<?
global $dbhandle;
global $selected;


function list_users(){

$result = mysql_query("SELECT * FROM app_users ");
$row = mysql_fetch_array($result);

   	$perso_id = $row{'id_perso'};

}
?>