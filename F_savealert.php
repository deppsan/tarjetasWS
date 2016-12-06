<?
header("Access-Control-Allow-Origin: *");


$username = "exacomco_usar";
$password = "L?Ws3=lA9v0c";
$hostname = "localhost"; 



$user = $_REQUEST['usuario'];
$card = $_REQUEST['id_card'];
$alert = $_REQUEST['Alerta'];



$conn = new mysqli('localhost', $username, $password, 'exacomco_app');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO app_alerts (id_user, id_card, p_alerta) VALUES ('$user', '$card', '$alert')";

if ($conn->query($sql) === TRUE) {
   // echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


echo json_encode($arrays);

?>
