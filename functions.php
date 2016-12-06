<?
global $dbhandle;
global $selected;


function get_personalization($user_id){

$result = mysql_query("SELECT * FROM app_rel_perso_user WHERE id_user = '$user_id' ");
$row = mysql_fetch_array($result);

   	$perso_id = $row{'id_perso'};


$result2 = mysql_query("SELECT * FROM app_personalizacion WHERE id_p = '$perso_id' ");
$rowa = mysql_fetch_array($result2);

return array('app_imagen'=>$rowa{'app_imagen'},'app_banner'=>$rowa{'app_banner'},'app_color1'=>$rowa{'app_color1'},'app_color2'=>$rowa{'app_color2'});


}
?>