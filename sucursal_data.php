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
$suc_data = $_REQUEST['id_s'];
$mi_lat = $_REQUEST['lat'];
$mi_long = $_REQUEST['long'];

function distance($lat1, $lon1, $lat2, $lon2, $unit) { 

  $theta = $lon1 - $lon2;
  $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
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


$result = mysql_query("SELECT * FROM app_sucursales WHERE id_s = '$suc_data' ");

$ifind = mysql_num_rows($result);


$row = mysql_fetch_array($result);




    $sucursales = array(
      'id_s'=>$row{'id_s'},
      'sucursal'=>$row{'app_sucursal'},
      'horarios'=>$row{'app_horario'},
      'distance'=>round(distance($mi_lat,$mi_long, $row['app_latitud'], $row['app_longitud'], "N"),2),
      'direccion'=>utf8_encode($row{'app_direccion'}),
      'latitud'=>$row{'app_latitud'},
      'longitud'=>$row{'app_longitud'},
      'icon'=>$row{'app_icon'},
      'phone'=>$row{'app_phone'},
      'imagen'=>$row{'app_img'}
      );

mysql_close($dbhandle);

echo json_encode($sucursales);

?>