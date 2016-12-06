<?
header("Access-Control-Allow-Origin: *");


$username = "exacomco_usar";
$password = "L?Ws3=lA9v0c";
$hostname = "localhost"; 
$_user = $_REQUEST['id_user'];
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("Unable to connect to MySQL");

$selected = mysql_select_db("exacomco_app",$dbhandle);


//calcula distancia

$mi_lat = $_REQUEST['lat'];
$mi_long = $_REQUEST['long'];

function distance($lat1, $lon1, $lat2, $lon2, $unit) { 

  $theta = $lon1 - $lon2;
  $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
  $dist = acos($dist);
  $dist = rad2deg($dist);
  $miles = $dist * 60 * 1.1515;
  $unit = strtoupper($unit);

  if ($unit == "K") {

      if(round(($miles * 1.609344),2)<1){
    return "Menos de 1 km";    
      }
    return round(($miles * 1.609344),2);
  
  } else if ($unit == "N") {
      return ($miles * 0.8684);
    } else {
        return $miles;
      }
}

//----------------------


$result = mysql_query("SELECT * FROM app_sucursales");

$ifind = mysql_num_rows($result);

$i = '';

if ($ifind>0){

while($row = mysql_fetch_array($result)){




    $sucursales[] = array(
      'id_s'=>$row{'id_s'},
      'sucursal'=>$row{'app_sucursal'},
      'horarios'=>$row{'app_horario'},
      'distancia'=>round(distance($mi_lat,$mi_long, $row['app_latitud'], $row['app_longitud'], "N"),2).'Km',
      'distance'=>round(distance($mi_lat,$mi_long, $row['app_latitud'], $row['app_longitud'], "N"),2),
      'latitud'=>$row{'app_latitud'},
      'longitud'=>$row{'app_longitud'},
      'imagen'=>$row{'app_icon'}
      );


} 


    }else{


}
mysql_close($dbhandle);

echo json_encode($sucursales);

?>