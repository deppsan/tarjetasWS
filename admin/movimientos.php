<?
include('include/config.php');
include('include/class.php');
$userk=$_REQUEST['id'];
$user = new usuarios();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DWH experts app controllers</title>
<!-- Latest compiled and minified CSS -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>


<script>
$(document).ready(function(){

$('#elsubmit').click(function(){


var idk     = $('#nombre').val();
var app     = $('#apaterno').val();
var apm     = $('#amaterno').val();
var users   = $('#usuario').val();
var pass    = $('#contra').val();


var parametros = {
                "iuser" : idk,
                "app" : app,
                "apm" : apm,
                "user" : users,
                "pass" : pass
        };
        $.ajax({
                data:  parametros,
                url:   'include/newtransaction.php',
                type:  'post',
                beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                },
                success:  function (response) {

                        $("#resultado").html('<div class="alert alert-success" role="alert">El usuario ha sido agregado</div>');
                }
        });



location.reload();

})

});
</script>

</head>

<body>

<div class="container-fluid">
  <div class="row">

  	<div class="col-xs-9">



    <h1>usuario</h1>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
       
      <address>
         <strong><?= $user->show_data_user($userk,NOMBRE);?> <?= $user->show_data_user($userk,AMATERNO);?> <?= $user->show_data_user($userk,APATERNO);?></strong><br /> <?= $user->show_data_user($userk,app_username);?><br /> <br /> <abbr title="Phone"></abbr> 
      </address>


 <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>transaccion</th>
                            <th>fecha</th>
                            <th>hora</th>
                            <th>puntos</th>
                            <th>Costo</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?=$user->movimientos($userk);?> 
                     
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    </div>
  </div>
</div>


</div>

  </div>
</div>

</body>
</html>